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
<div class="wrapper">
            <span class="main-page-title"><? echo $arResult['DISPLAY_PROPERTIES']['zagolovok']['DISPLAY_VALUE'];?></span>
        </div>
        <!-- Link Tabs -->
        <section class="link-tabs-section">
            <div class="wrapper">
                <ul class="link-tabs-list">
                    <li>
                        <a class="link-tabs-card" href="#">
                            <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/box-tab-icon.svg" alt="">
                            <span>Каталог</span>
                        </a>
                    </li>
                    <li>
                        <a class="link-tabs-card" href="#">
                            <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/percent-tab-icon.svg" alt="">
                            <span>Скидки</span>
                        </a>
                    </li>
                    <li>
                        <a class="link-tabs-card" href="#">
                            <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/star-tab-icon.svg" alt="">
                            <span>Хиты</span>
                        </a>
                    </li>
                    <li>
                        <a class="link-tabs-card" href="#">
                            <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/tag-tab-icon.svg" alt="">
                            <span>Новинки</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
<!-- Leadership -->
        <section class="leadership-section">
            <div class="wrapper">
                <div class="leadership-block">
                    <div class="leadership-image">
                        <img src="<?= SITE_TEMPLATE_PATH?>/images/director-img.png" alt="Руководитель">           
                        <div class="leadership-image-group">
                            <span class="leadership-image-title"><? echo $arResult['DISPLAY_PROPERTIES']['fio']['DISPLAY_VALUE'];?></span>
                            <span class="leadership-image-subtitle"><? echo $arResult['DISPLAY_PROPERTIES']['dolzhnost']['DISPLAY_VALUE'];?></span>
                        </div>
                    </div>
                    <div class="leadership-explanation">
                        <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/quotation-mark-left-icon.svg" alt="Кавычка">
                        <p class="leadership-explanation-desc"><? echo $arResult['DISPLAY_PROPERTIES']['cite_main']['DISPLAY_VALUE'];?></p>
<? echo $arResult['DISPLAY_PROPERTIES']['cite_list']['DISPLAY_VALUE'];?>
                        <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/quotation-mark-right-icon.svg" alt="Кавычка">
                    </div>
                </div>
            </div>
        </section>