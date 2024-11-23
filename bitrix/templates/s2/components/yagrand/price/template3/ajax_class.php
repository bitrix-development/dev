<?

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class YAGPriceAjax{
	static public	$IBLOCK_ID = 6,
					$CURRENCY_ID = 'RUB',
					$PRICE_CODE = 'BASE';
	static function doAction($sAction){
		global $APPLICATION;
		$APPLICATION->RestartBuffer();
		if(method_exists(YAGPriceAjax, 'action_'.$sAction)&&check_bitrix_sessid()){
      
			self::{'action_'.$sAction}();
                 
		}else{
			self::returnAResult(false, false, 'Действие не найдено');
		}
        
        
	}
	
	static function action_GET_XLSX($update = false){
		global $APPLICATION;
 
		ob_end_flush();
		#header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="price_youmet.ru_'.date('d.m.Y').'.xlsx"');
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');
		// If you're serving to IE over SSL, then the following may be needed
		#header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		#header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="price_youmet.ru_'.date('d.m.Y').'.xlsx"');
header('Cache-Control: max-age=0');
ob_end_clean();

	$filename = $_SERVER['DOCUMENT_ROOT']."/upload/price_".date('d.m.Y').".xlsx";

		if(!$update&&file_exists($filename)){
			readfile($filename);
			die();
		}else{

ini_set('max_execution_time', 0);
//ini_set("memory_limit","-1");
ini_set('memory_limit', '1512M');

$inputFileType = 'Xlsx';
$inputFileName = __DIR__ . '/price.tpl.xlsx';
            
#$reader = IOFactory::createReader($inputFileType);
$reader = PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$SS = $reader->load($inputFileName);
unset($reader);


			//	$SS = IOFactory::load((__DIR__).'/price.tpl.xlsx');
			$SS->getProperties()->setCreator('Youmet.ru')
				->setLastModifiedBy('Youmet.ru')
				->setTitle('Прайс-лист от ' . date('d.m.Y'))
				->setSubject('Прайс-лист от ' . date('d.m.Y'))
				->setDescription('Прайс-лист от ' . date('d.m.Y'))
				->setKeywords('прайс')
				->setCategory('Прайс-лист');
			$SS->removeSheetByIndex(1);
			$sheet = $SS->getActiveSheet();
			//$sheet = $SS->getActiveSheet()->getProtection()->setSheet(true);

			$sheet->setCellValue('A3', date('d.m.Y'));
			$sheet->removeColumn('C');

			$arSort = array(
					"left_margin"=>"asc",
				);
			$arFilter = array(
				"ACTIVE" => "Y",
				"GLOBAL_ACTIVE" => "Y",
				//		"ID" => "4548, 4809",
				"IBLOCK_ID" => self::$IBLOCK_ID,
				"CNT_ACTIVE" => "Y",
				"ELEMENT_SUBSECTIONS" => "N",
			);
			$arSelect = array();
			$arSelect[] = "ID";
			$arSelect[] = "NAME";
			$arSelect[] = "LEFT_MARGIN";
			$arSelect[] = "RIGHT_MARGIN";
			$arSelect[] = "DEPTH_LEVEL";
			$arSelect[] = "IBLOCK_ID";
			$arSelect[] = "IBLOCK_SECTION_ID";
			$arSelect[] = "LIST_PAGE_URL";
			$arSelect[] = "SECTION_PAGE_URL";
			$rsSections = CIBlockSection::GetList($arSort, $arFilter, 'Y', $arSelect);
			$rowID = 6;
			$CIBlockElement = new CIBlockElement();
			while($arSection = $rsSections->GetNext()){
				$sheet->setCellValue('A'.$rowID, $arSection['NAME']);
				if($arSection['DEPTH_LEVEL']>1){

					$sheet->getRowDimension($rowID)->setOutlineLevel($arSection['DEPTH_LEVEL']);
					$sheet->getRowDimension($rowID)->setVisible(false);

				}
				if($arSection["ELEMENT_CNT"]>0){
					$arConvertParams = array();
					$currencyIterator = Bitrix\Currency\CurrencyTable::getList(array(
						'select' => array('CURRENCY'),
						'filter' => array('=CURRENCY' => self::$CURRENCY_ID)
					));
					if ($currency = $currencyIterator->fetch())
					{
						self::$CURRENCY_ID = $currency['CURRENCY'];
						$arConvertParams['CURRENCY_ID'] = $currency['CURRENCY'];
					}
					$arFilter = array(
						'ACTIVE' => 'Y',
						'IBLOCK_ID' => self::$IBLOCK_ID,
						'SECTION_ID' => $arSection['ID'],
					);
					$arNavParams = array(
						'iNumPage' =>1,
						'nPageSize' => 99999
					);

					$arPrices = CIBlockPriceTools::GetCatalogPrices(self::$IBLOCK_ID, array(self::$PRICE_CODE));
					$arSelect = array('NAME', 'ID', 'IBLOCK_ID', "DETAIL_PAGE_URL", 'PROPERTY_MANUFACTURER');
					foreach($arPrices as $code=>$arPrice){

						if(isset($arOrder['PRICE'.$code])){
							$arOrder[$arPrice['SELECT']] = $arOrder['PRICE'.$code];
							unset($arOrder['PRICE'.$code]);
						}
						$arSelect[] = $arPrice['SELECT'];
					}
					//print_r($arSelect); die();
					//$rsElements = CIBlockElement::GetList($arOrder, $arFilter, false, $arNavParams, $arSelect);
					$rsElements = CIBlockElement::GetList($arOrder, $arFilter, "", "", $arSelect);
					//$rsElements->SetUrlTemplates($arParams["DETAIL_URL"]);
					$sheet->getRowDimension($rowID)->setCollapsed(true);
					$rowID++;

					while($arElement = $rsElements->GetNext()){
						$arManufacturer = $CIBlockElement->GetByID($arElement['PROPERTY_MANUFACTURER_VALUE'])->GetNext();			
						$sheet->setCellValue('A'.$rowID, $arSection['NAME']);
						$sheet->setCellValue('B'.$rowID, $arManufacturer['NAME']);
						//$sheet->setCellValue('C'.$rowID, $arElement['ID']);
						$sheet->setCellValue('C'.$rowID, $arElement['NAME']);
						$arData = array();
						$arData['NAME'] = '<a target="_blank" href="'.$arElement['DETAIL_PAGE_URL'].'">'.$arElement['NAME'].'</a>';
						//$arData["PRICES"] = CIBlockPriceTools::GetItemPrices(self::$IBLOCK_ID, $arPrices, $arElement, 'Y', $arConvertParams);
						//$arData["PRICES"] = CIBlockPriceTools::GetItemPrices(self::$IBLOCK_ID, "CATALOG_GROUP_1", $arElement, 'Y', $arConvertParams);
global  $USER;
$arData["PRICES"] = CIBlockPriceTools::GetItemPrices(
    self::$IBLOCK_ID, 
    $arPrices, 
    $arElement, 
    'Y', 
    $arConvertParams,
    0,
    array(),
    0,
    0,
    $USER->GetUserGroupArray()
);
						/*
// Получаем список цен для данного товара
$arData["PRICES"] = \Bitrix\Catalog\PriceTable::getList([
    'filter' => [
        'PRODUCT_ID' => $arElement['ID'], // ID товара
		//'CATALOG_GROUP_ID' => "CATALOG_GROUP_1", // ID типов цен
    ],
    'select' => ['ID', 'CATALOG_GROUP_ID', 'PRICE', 'CURRENCY'], // Выбираем нужные поля
])->fetchAll();

// Обходим полученный список цен
foreach ($arData["PRICES"] as $k=>&$arPrice) {
    // Если валюта не совпадает с базовой валютой
	 if ($arPrice['CURRENCY'] != \Bitrix\Currency\CurrencyManager::getBaseCurrency()) {
        // Конвертируем цену в базовую валюту
		$arPrice['PRICE'] = \CCurrencyRates::ConvertCurrency($arPrice['PRICE'], $arPrice['CURRENCY'], \Bitrix\Currency\CurrencyManager::getBaseCurrency());
        $arPrice['CURRENCY'] = \Bitrix\Currency\CurrencyManager::getBaseCurrency();
	 }
}
*/
						//echo('<pre>');print_r($arData["PRICES"]);echo('</pre>');
						//echo('<pre>');print_r($arPrices);echo('</pre>');

						$sPrice = '';

						foreach($arPrices as $code=>$arPrice){
							if($code != self::$PRICE_CODE)
								continue;
							if($arPrice = $arData["PRICES"][$code]){
								if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"])
									$sPrice = $arPrice["PRINT_DISCOUNT_VALUE"];
								else
									$sPrice = $arPrice["PRINT_VALUE"];
								
							}else{
								$sPrice = '';
							}
						}
						//print_r($sPrice); die();
						$sheet->setCellValue('D'.$rowID, $sPrice);
						$sheet->setCellValue('E'.$rowID, 'Посмотреть на сайте');
						$sheet->getCell('E'.$rowID)->getHyperlink()->setUrl('https://'.SITE_SERVER_NAME.$arElement['DETAIL_PAGE_URL']);
						$sheet->getRowDimension($rowID)->setOutlineLevel($arSection['DEPTH_LEVEL']+1);
						$sheet->getRowDimension($rowID)->setVisible(false);

						$rowID++;
					}
					continue;
				}
				if($arSection['DEPTH_LEVEL']>1)
					$sheet->getRowDimension($rowID)->setCollapsed(true);
				$rowID++;
			}

			//	$writer = IOFactory::createWriter($SS, 'Xlsx');
			// Сохранение файла в формате xlsx

			//$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($SS, 'Xlsx');
$writer = new Xlsx($SS);
$writer->setPreCalculateFormulas(false);
#$writer->setOffice2003Compatibility(true);
$writer->save($filename);
readfile($filename);

			//$writer->save('php://output');

die();

			return true;
		}
	}
	
	static function action_GET_PRODUCTS(){
		$arOrder = array();
		foreach($_REQUEST['order'] as $arOrderCol){
				$colname = $_REQUEST['columns'][$arOrderCol['column']]['data'];
				$arOrder[$colname] = $arOrderCol['dir'];
		}
		$answer = array();
		$arConvertParams = array();
		$arResultModules['currency'] = true;
		$currencyIterator = Bitrix\Currency\CurrencyTable::getList(array(
			'select' => array('CURRENCY'),
			'filter' => array('=CURRENCY' => self::$CURRENCY_ID)
		));
		if ($currency = $currencyIterator->fetch())
		{
			self::$CURRENCY_ID = $currency['CURRENCY'];
			$arConvertParams['CURRENCY_ID'] = $currency['CURRENCY'];
		}
		$arFilter = array(
			"ACTIVE" => "Y",
			'IBLOCK_ID' => self::$IBLOCK_ID,
			'SECTION_ID' => $_REQUEST['SECTION_ID'],
		);
		if($_REQUEST['length']>0){
			$arNavParams = array(
				'iNumPage' =>$_REQUEST['start']/$_REQUEST['length'],
				'nPageSize' => $_REQUEST['length']
			);
		}else{
			$arNavParams = array(
				'iNumPage' =>1,
				'nPageSize' => 99999
			);
		}
		$arPrices = CIBlockPriceTools::GetCatalogPrices(self::$IBLOCK_ID, array(self::$PRICE_CODE));
		$arSelect = array('NAME', 'ID', 'IBLOCK_ID', "DETAIL_PAGE_URL",);
		foreach($arPrices as $code=>$arPrice){
			if(isset($arOrder['PRICE'.$code])){
				$arOrder[$arPrice['SELECT']] = $arOrder['PRICE'.$code];
				unset($arOrder['PRICE'.$code]);
			}
			$arSelect[] = $arPrice['SELECT'];
		}
		$rsElements = CIBlockElement::GetList($arOrder, $arFilter, false, $arNavParams, $arSelect);
		$rsElements->SetUrlTemplates($arParams["DETAIL_URL"]);
		$arTableData = array();
		while($arElement = $rsElements->GetNext()){
			$arData['NAME'] = '<a target="_blank" href="'.$arElement['DETAIL_PAGE_URL'].'">'.$arElement['NAME'].'</a>';
			$arData["PRICES"] = CIBlockPriceTools::GetItemPrices(self::$IBLOCK_ID, $arPrices, $arElement, 'Y', $arConvertParams);
			foreach($arPrices as $code=>$arPrice){
				if($arPrice = $arData["PRICES"][$code]){
					if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"])
						$arData['PRICE_'.$code] = $arPrice["PRINT_DISCOUNT_VALUE"];
					else
						$arData['PRICE_'.$code] = $arPrice["PRINT_VALUE"];
					
				}else{
					$arData['PRICE_'.$code] = '';
				}
			}
			$arTableData[] = $arData;
		}
		$answer['result'] = true;
		$answer['data'] = $arTableData;
		$answer['recordsFiltered'] = $rsElements->SelectedRowsCount();
		$answer['recordsTotal'] = $rsElements->NavRecordCount;
		$answer['draw'] = $_REQUEST['draw'];
		echo json_encode($answer);
		die();
		
	}
	
	static function returnAResult($r = false, $d = array(), $e = '', $et = 'warning'){
		header('Content-Type: application/json; charset='.LANG_CHARSET);		
		echo json_encode(array('data'=>$d, 'result'=>$r, 'error'=>$e, 'error_type'=> $et));
		self::end();
	}
	
	static function end(){
		die();
	}
}

if (isset($_REQUEST['ACTION']) && $_REQUEST['ACTION'] === 'TARGET_TABLE')
{
	$answer['result'] = true;
	$answer['data'] = $arTableData;
	$answer['recordsFiltered'] = $GoalTarget->calcCount($arFilter);
	$answer['recordsTotal'] = $GoalTarget->calcCount($arTotalFilter);
	$answer['draw'] = $_REQUEST['draw'];
	echo json_encode($answer);
	die();
}