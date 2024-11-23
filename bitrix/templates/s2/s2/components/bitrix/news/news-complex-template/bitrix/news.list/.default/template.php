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
?><div class="service-container">
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
<div class="service-box">
    <!-- Service Wrapper -->
    <div class="service-wrapper">
<h2 class="contacts-title">Новости</h2>
<div class="reviews-recent-panel">

    <ul class="reviews-recent-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <li class="reviews-recent-item">
        <div class="reviews-recent-card">
            <div class="reviews-recent-group">
                <div>
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_7213)">
                            <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M6 3V6L8 7" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_1_7213">
                                <rect width="12" height="12" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="reviews-recent-time" style=""><span> Время прочтения 1 мин<?
                        /*$content = "Ваш контент";
                        $words_per_minute = "250"; // Время чтения слов в минуту
                        $img_per_minute = "12"; // Время чтения изображения в секундах
                        $img_numb = preg_match_all("~<img~i", $content, $result_numb); // Плучаем общее количество изображений в тексте
                        $text_read = round(count(preg_split("/s/", $content)) /  $words_per_minute, 1); // Получаем общее время чтения текста
                        $img_read = floor((count($result_numb[0]) * $img_per_minute) / 60); // Получаем общее время чтения изображений
                        $all_read = $img_read + $text_read; // Получаем общее время чтения (текст + изображения)

                        function decl_of_numb($all_numb, $titles) {

                            $cases = array(2, 0, 1, 1, 1, 2);
                            return $all_numb." ".$titles[($all_numb%100>4 && $all_numb%100<20) ? 2 : $cases[min($all_numb%10, 5)]];

                        }

                        echo "Время чтения:<span> ".decl_of_numb(round($all_read), array(" минута", " минуты", " минут"));
                   */     ?></span></span>
                </div>
                <div>
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 6C0.5 6 2.5 2 6 2C9.5 2 11.5 6 11.5 6C11.5 6 9.5 10 6 10C2.5 10 0.5 6 0.5 6Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6 7.5C6.82843 7.5 7.5 6.82843 7.5 6C7.5 5.17157 6.82843 4.5 6 4.5C5.17157 4.5 4.5 5.17157 4.5 6C4.5 6.82843 5.17157 7.5 6 7.5Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="reviews-recent-count"><?echo $arItem["SHOW_COUNTER"]?></span>
                </div>
            </div>
            <span class="reviews-recent-subtitle">Тег новости <?echo $arItem["PROPERTY"]["CAT_NEWS"]["VALUE"]?></span>
            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="reviews-recent-heading"><?echo $arItem["NAME"]?></a>
            <span class="reviews-recent-date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
            <a class="reviews-recent-link" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
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
</div>
    </div>
</div></div>
<style>
    .service-wrapper ul.reviews-recent-list li::before {
        content: unset;
        display: block;
        width: 5px;
        height: 5px;
        background-color: #333333;
        border-radius: 50%;
        position: absolute;
        margin-left: -15px;
    }
    .service-wrapper ul.reviews-recent-list li {
        margin-left: unset;
    }
    .reviews-recent-card {
        padding: 8px;
        border-radius: 12px;
        background-color: #ffffff;
        transition: .3s;
        width: 100%;
    }
    .service-box { width: 82%;}
    .side-nav-panel  { width: 18%;}
   .reviews-pagination { flex-direction: row!important;
     gap: unset!important; }
    li.reviews-pagination-item:before {
        content: unset!important;}
    .reviews-pagination-item {margin-left: 0!important;}
</style>