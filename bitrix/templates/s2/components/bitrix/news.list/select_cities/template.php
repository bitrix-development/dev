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

global $APPLICATION;
CUtil::InitJSCore(array('bootstrap', 'jquery_maskedinput'));
$url = $_GET['u']?$_GET['u']:$APPLICATION->GetCurPageParam('',array('city','from_site'));
$isHttps = !empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS']);
?>
<div class="container">
<? $itemCounter = 0;?>
<? $itemColNumber = 0;?>
<? $itemColumns = array();?>
<? $itemColMax = 35;
$url = $_GET['u']?$_GET['u'].(!empty($arResult["MOSCOW"]["PROPERTIES"]['DOMAIN']['~VALUE'])?'?chcity='.$arResult["MOSCOW"]["PROPERTIES"]['DOMAIN']['~VALUE']:''):$APPLICATION->GetCurPageParam((!empty($arResult["MOSCOW"]["PROPERTIES"]['DOMAIN']['~VALUE'])?'chcity='.$arResult["MOSCOW"]["PROPERTIES"]['DOMAIN']['~VALUE']:''),array('city','from_site'));?>
<ul class="city-item-favorites list-unstyled">
	<li class="city-items-favorite" ><a rel="nofollow" target="_top" href="<?=($isHttps?'https://':'http://').SITE_SERVER_NAME.$url?>"><?echo $arResult["MOSCOW"]["NAME"]?></a></li>
</ul>	
<?foreach($arResult["SORT_ITEMS"] as $strLetter=>$arItems):?>
<? if($itemCounter<$itemColMax):?>
<? $itemCounter++;?>
<? ob_start();?>
<li class="city-items-letter-group"><?=$strLetter?></li>
<? $itemColumns[$itemColNumber][] =ob_get_clean();?>
<? else:?>
<? $itemCounter = 0;?>
<? $itemColNumber++;?>
<? endif;?>
	<?foreach($arItems as $arItem):

$url = $_GET['u']?$_GET['u'].(!empty($arItem["PROPERTIES"]['DOMAIN']['~VALUE'])?'?chcity='.$arItem["PROPERTIES"]['DOMAIN']['~VALUE']:''):$APPLICATION->GetCurPageParam((!empty($arItem["PROPERTIES"]['DOMAIN']['~VALUE'])?'chcity='.$arItem["PROPERTIES"]['DOMAIN']['~VALUE']:''),array('city','from_site'));?>
		<? if($itemCounter<$itemColMax):?>
		<? $itemCounter++;?>
		<? ob_start();?>
		<li >
			<noindex><a rel="nofollow" target="_top" href="<?=($isHttps?'https://':'http://').SITE_SERVER_NAME.$url?>"><?echo $arItem["NAME"]?></a></noindex>
		</li>
		<? $itemColumns[$itemColNumber][] =ob_get_clean();?>
		<? else:?>
		<? $itemCounter = 0;?>
		<? $itemColNumber++;?>
		<? endif;?>
	<?endforeach;?>	
<?endforeach;?>
<div class="row">
<?foreach($itemColumns as $colNumber=>$arItems):?>
	<div class="col-xs-6 col-sm-3 col-md-3">
	<ul class="city-item-list list-unstyled">
		<?foreach($arItems as $arItem):?>
		<?=$arItem?>
	<?endforeach;?>	
	</ul>
	</div>
	<?endforeach;?>	
</div>
</div>
