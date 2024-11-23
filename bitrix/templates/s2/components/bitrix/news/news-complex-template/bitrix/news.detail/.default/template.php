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
<div class="article-container">
    <div class="side-nav-panel" style="margin-bottom: 20px;">
        <div class="side-nav-block">
            <span class="side-nav-title">О компании</span>
            <ul class="side-nav-list">
                <? include $_SERVER['DOCUMENT_ROOT'].'/menu-about.php'?>
            </ul>
        </div>
        <div class="side-nav-block">
            <span class="side-nav-title">Контакты</span>
            <ul class="side-nav-list">
                <? include $_SERVER['DOCUMENT_ROOT'].'/menu-contacts.php'?>

            </ul>
        </div>
        <div class="side-nav-block">
            <span class="side-nav-title">Оплата и доставка</span>
            <ul class="side-nav-list">
                <? include $_SERVER['DOCUMENT_ROOT'].'/menu-oplata.php'?>

            </ul>
        </div>
        <div class="side-nav-block">
            <span class="side-nav-title">Полезная информация</span>
            <ul class="side-nav-list">
                <? include $_SERVER['DOCUMENT_ROOT'].'/menu-clients.php'?>
            </ul>
        </div>
    </div>
    <div class="article-box">
        <article class="article-block">
            <div class="article-group-mobile">
                <div>
                                <span class="article-time">
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11.5C8.76142 11.5 11 9.26142 11 6.5C11 3.73858 8.76142 1.5 6 1.5C3.23858 1.5 1 3.73858 1 6.5C1 9.26142 3.23858 11.5 6 11.5Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 3.5V6.5L8 7.5" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Время прочтения:
                                    <span>1 мин</span>
                                </span>
                    <span class="article-count">
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 6.5C0.5 6.5 2.5 2.5 6 2.5C9.5 2.5 11.5 6.5 11.5 6.5C11.5 6.5 9.5 10.5 6 10.5C2.5 10.5 0.5 6.5 0.5 6.5Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 8C6.82843 8 7.5 7.32843 7.5 6.5C7.5 5.67157 6.82843 5 6 5C5.17157 5 4.5 5.67157 4.5 6.5C4.5 7.32843 5.17157 8 6 8Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span><?echo $arResult["SHOW_COUNTER"]?></span>
                                </span>
                </div><?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                   <span class="article-date"> <?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
                <?endif;?>

            </div>
            <div class="article-group">
                <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                    <span class="article-date"> <?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
                <?endif;?>
                <span class="article-time">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 22.5C17.5228 22.5 22 18.0228 22 12.5C22 6.97715 17.5228 2.5 12 2.5C6.47715 2.5 2 6.97715 2 12.5C2 18.0228 6.47715 22.5 12 22.5Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 6.5V12.5L16 14.5" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Время прочтения:
                                <span>1 мин</span>
                            </span>
                <span class="article-count">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12.5C1 12.5 5 4.5 12 4.5C19 4.5 23 12.5 23 12.5C23 12.5 19 20.5 12 20.5C5 20.5 1 12.5 1 12.5Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 15.5C13.6569 15.5 15 14.1569 15 12.5C15 10.8431 13.6569 9.5 12 9.5C10.3431 9.5 9 10.8431 9 12.5C9 14.1569 10.3431 15.5 12 15.5Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><?echo $arResult["SHOW_COUNTER"]?></span>
                            </span>
            </div>
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="article-img""
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>

	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h1 class="article-title"><?=$arResult["NAME"]?></h1>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '')):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>

	<?
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
    </div>
</div>
</div>
<style>
 .article-block ul {list-style: none;
     margin-bottom: 12px;}
 .article-block li {    position: relative;
     display: flex;
     align-items: center;
     font-weight: 400;
     font-size: 16px;
     line-height: 20px;
     color: #333333;
     margin-left: 20px;}
 .article-block li:not(:last-child) {
     margin-bottom: 4px;
 }
 .article-block li:before {
     content: "";
     position: absolute;
     left: 0;
     width: 5px;
     height: 5px;
     border-radius: 50%;
     background-color: #333333;
     margin-left: -15px;
 }

</style>