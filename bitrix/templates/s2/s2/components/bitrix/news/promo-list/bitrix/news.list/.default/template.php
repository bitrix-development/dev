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
?>

<ul class="reviews-recent-list">

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<li class="reviews-recent-item"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="reviews-recent-card">

            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="reviews-recent-heading"><?echo $arItem["NAME"]?></a>
            <span class="reviews-recent-date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
            <p><?echo $arItem["PREVIEW_TEXT"];?></p>
            <a class="reviews-recent-link" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                Читать
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.40625 5.5L11.4062 5.5" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M8.57422 2.12769L11.9628 5.49995L8.57422 8.87221" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </li>
	
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</ul>
