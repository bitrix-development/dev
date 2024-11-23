<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$geoDatat = $geoData->cityName;
$geoDatatid = $geoData->cityId;
?>

<? $finded = false;?>
<? $moscow_id = 0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
		<? if('москва'==strtolower($arItem['PROPERTIES']['CITY']['VALUE'])):?>
			<? $moscow_id = $arItem['ID'];?>
			<? ob_start()?>
        <p>  <a title="Выбрать другой город" href="javascript:void(0);" class="city" onclick="showFrameInFancy('/iframec/city_select/?u='+window.location.pathname+window.location.search+window.location.hash, {autoHeight:true,});"><span class="your_address">Ваш город:</span> <?=$arItem['PROPERTIES']['CITY']['VALUE']?></a></p>
				<? foreach($arItem['PROPERTIES']['PHONES']['VALUE'] as $phone):?>
				<? $phone = preg_replace('/[^\d]/', '', $phone);
					if(strlen($phone)<11)
						$phone = '7'.$phone;
				?>
				<p><a class="header-phone" href="tel:+<?=$phone?>"><span>+<?=substr($phone,0, -10)?> (<?=substr($phone,-10, 3)?>)</span> <?=substr($phone,-7, 3)?>-<?=substr($phone,-4, 2)?>-<?=substr($phone,-2)?><i class="fa fa-phone"></i></a></p>
				<? endforeach;?>
			<? $moscow = ob_get_clean()?>			
		<? endif?>
		<? if(strtolower($geoDatat)==strtolower(str_replace(' ', '', $arItem['PROPERTIES']['CITY']['VALUE']))):?>
			<? 	$finded = TRUE;
				$geoDatatid = $arItem['ID'];
				?>
			<p><a title="Выбрать другой город" href="javascript:void(0);" class="city " onclick="showFrameInFancy('/iframec/city_select/?u='+window.location.pathname+window.location.search+window.location.hash, {autoHeight:true,});"><span class="your_address">Ваш город:</span> <?=$arItem['PROPERTIES']['CITY']['VALUE']?></a></p>
			<? foreach($arItem['PROPERTIES']['PHONES']['VALUE'] as $phone):?>
			<? $phone = preg_replace('/[^\d]/', '', $phone);
				if(strlen($phone)<11)
					$phone = '7'.$phone;
			?>
			<p><a class="header-phone" href="tel:+<?=$phone?>"><span>+<?=substr($phone,0, -10)?> (<?=substr($phone,-10, 3)?>)</span> <?=substr($phone,-7, 3)?>-<?=substr($phone,-4, 2)?>-<?=substr($phone,-2)?><i class="fa fa-phone"></i></a></p>
			<? endforeach;?>
			<? break;?>
		<? endif?>
<?endforeach;?>
<? if(!$finded):?>
	<?$geoDatatid = $moscow_id;?>
	<?=$moscow;?>
<? endif;?>

