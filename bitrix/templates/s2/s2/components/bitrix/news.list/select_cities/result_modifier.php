<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arItems = $arResult["ITEMS"];
$arSortItems = array();
$arMoscow = array();
foreach($arItems as $arItem):
	$arSortItems[mb_substr($arItem["NAME"], 0, 1)][] = $arItem;
	if($arItem["ID"]==11079)
		$arMoscow = $arItem;
endforeach;
if($_GET['debug']=='Y'){
//	var_dump($arSortItems);
}
$arResult["SORT_ITEMS"] = $arSortItems;
$arResult["MOSCOW"] = $arMoscow;