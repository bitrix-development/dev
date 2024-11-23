<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->addExternalCss("https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css");
$this->addExternalCss("https://cdn.datatables.net/buttons/1.5.1/css/buttons.jqueryui.min.css");
$this->addExternalCss("https://cdn.datatables.net/1.10.16/css/dataTables.jqueryui.min.css");
 
$arParams = array(
	"IBLOCK_ID" => "6",
	"SECTION_URL" => "/shop/#SECTION_CODE_PATH#/",
);
$arSort = array(
		"left_margin"=>"asc",
	);
$arFilter = array(
	"ACTIVE" => "Y",
	"GLOBAL_ACTIVE" => "Y",
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
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
$rsSections->SetUrlTemplates("", $arParams["SECTION_URL"]);
$intCurrentDepth = 1;
$boolFirst = true;
?>
<div style="text-align: right;" class="category-tabs-item">
<a href="/price/ajax/GET_XLSX/?<?=bitrix_sessid_get()?>"><i class="fa fa-download"></i> Скачать в формате XLSX (Excel)</a>
</div>
<ul class="price-list">
<?
while($arSection = $rsSections->GetNext()){
	if ($intCurrentDepth < $arSection['DEPTH_LEVEL'])
	{
		if (0 < $intCurrentDepth)
			echo "\n",str_repeat("\t", $arSection['DEPTH_LEVEL']),'<ul style="display:none;">';
	}
	elseif ($intCurrentDepth == $arSection['DEPTH_LEVEL'])
	{
		if (!$boolFirst)
			echo '</li>';
	}
	else
	{
		while ($intCurrentDepth > $arSection['DEPTH_LEVEL'])
		{
			echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
			$intCurrentDepth--;
		}
		echo str_repeat("\t", $intCurrentDepth-1),'</li>';
	}

	echo (!$boolFirst ? "\n" : ''),str_repeat("\t", $arSection['DEPTH_LEVEL']);
	?><li><h2 ><a onclick="<?if($arSection["ELEMENT_CNT"]>0){?>makeDataTable($('#price_section_<?=$arSection["ID"]?>_element_list').toggle('blind', {}, 500 ));<?}?>$(this).parents('li').eq(0).find('ul').eq(0).toggle('blind', {}, 500);$('i',this).toggleClass('fa-caret-right fa-caret-down');" href="javascript:void(0);"><i class="fa fa-caret-right"></i><? echo $arSection["NAME"];?></a></h2>
	<?if($arSection["ELEMENT_CNT"]>0){?>
		<div class="price_section_element_list" style="display:none;" data-section_id="<?=$arSection["ID"]?>" id="price_section_<?=$arSection["ID"]?>_element_list">
			<table class="display" cellspacing="0" width="100%">
				<thead>
					<th data-id="NAME" data-searchable="false" data-orderable="false" data-search="">Наименование</th>
					<th data-id="PRICE_BASE" data-searchable="false" data-orderable="false" data-search="">Цена</th>
				</thead>
			</table>
		</div>
	<?}?>
	<?

	$intCurrentDepth = $arSection['DEPTH_LEVEL'];
	$boolFirst = false;
}

unset($arSection);
while ($intCurrentDepth > 1)
{
	echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
	$intCurrentDepth--;
}
if ($intCurrentDepth > 0)
{
	echo '</li>',"\n";
}
?>
</ul>
<script>
</script>

<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.jqueryui.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>