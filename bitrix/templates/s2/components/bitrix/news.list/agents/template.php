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
?>
<div class="agent-list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="item">
				<p><span class="contacts-subtitle"><?=$arItem['PROPERTIES']['CITY']['VALUE']?></span></p>
				<? foreach($arItem['PROPERTIES']['ADDRESSES']['VALUE'] as $address):?>
				<p><i class="fa fa-home"></i><span class="address"><?=$address;?></span></p>
				<? endforeach;?>
				<? foreach($arItem['PROPERTIES']['PHONES']['VALUE'] as $phone):?>
				<? $phone = preg_replace('/[^\d]/', '', $phone);
					if(strlen($phone)<11)
						$phone = '7'.$phone;
				?>
				<p><i class="fa fa-phone"></i><span class="phone">+<?=substr($phone,0, -10)?> (<?=substr($phone,-10, 3)?>) <?=substr($phone,-7, 3)?>-<?=substr($phone,-4, 2)?>-<?=substr($phone,-2)?></span></p>
				<? endforeach;?>
				<? foreach($arItem['PROPERTIES']['EMAIL']['VALUE'] as $email):?>
				<p><i class="fa fa-envelope"></i><span class="phone"><a href="mailto:<?=$email?>"><?=$email?></a></span></p>
				<? endforeach;?> 
		</div>
	<?endforeach;?>
</div>

