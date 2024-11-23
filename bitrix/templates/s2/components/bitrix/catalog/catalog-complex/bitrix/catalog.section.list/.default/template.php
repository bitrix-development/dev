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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
    'LIST' => array(
        'CONT' => 'category-page-block',
        'TITLE' => 'bx_sitemap_title',
        'LIST' => 'bx_sitemap_ul',
    ),
    'LINE' => array(
        'CONT' => 'bx_catalog_line',
        'TITLE' => 'bx_catalog_line_category_title',
        'LIST' => 'bx_catalog_line_ul',
        'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
    ),
    'TEXT' => array(
        'CONT' => 'bx_catalog_text',
        'TITLE' => 'bx_catalog_text_category_title',
        'LIST' => 'bx_catalog_text_ul'
    ),
    'TILE' => array(
        'CONT' => 'bx_catalog_tile',
        'TITLE' => 'bx_catalog_tile_category_title',
        'LIST' => 'bx_catalog_tile_ul',
        'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
    )
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?><div class="wrapper">
    <div class="category-page">
        <!-- Side Panel -->
        <div class="side-panels-block">
            <div class="category-panel">
                <h2 class="category-panel-title">Категории</h2>
                <a class="category-panel-back" href="#">
                    <svg width="6" height="14" viewBox="0 0 6 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L1 7L5 13" stroke="#828282"></path>
                    </svg>
                    <span>Штабелеры</span>
                </a>
                <ul class="category-panel-list">
                    <li class="category-panel-item active">
                        <a href="#">Штабелеры гидравлические</a>
                    </li>
                    <li class="category-panel-item">
                        <a href="#">Штабелеры ручные гидравлические</a>
                    </li>
                    <li class="category-panel-item">
                        <a href="#">Штабелеры ручные гидравлические для рулонов</a>
                    </li>
                    <li class="category-panel-item">
                        <a href="#">Штабелеры ручные механические с лебедкой</a>
                    </li>
                    <li class="category-panel-item">
                        <a href="#">Штабелеры ручные гидравлические нержавеющая сталь</a>
                    </li>
                    <li class="category-panel-item">
                        <a href="#">Штабелеры ручные гидравлические с раздвижными виллами</a>
                    </li>
                    <li class="category-panel-item">
                        <a href="#">Штабелеры ручные гидравлические с расширенными опорами</a>
                    </li>
                    <li class="category-panel-item">
                        <a href="#">Штабелеры ручные гидравлические облегченные</a>
                    </li>
                </ul>
            </div>
            <div class="filter-panel">
                <div class="filter-panel-block">
                    <h2 class="filter-panel-title">Фильтр</h2>
                    <button class="filter-reset-btn" type="reset">Сбросить все фильтры</button>
                </div>
                <!-- Price Filter -->
                <div class="filter-panel-price">
                    <div class="filter-panel-block">
                        <div class="filter-panel-group">
                            <span class="filter-title">Цена<span>(руб)</span></span>
                            <button class="filter-range-btn filter-btn" type="button">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5L5 1L9 5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        <button class="filter-reset-btn" type="reset">Сбросить</button>
                    </div>
                    <div class="price-range-block">
                        <div class="price-range-group">
                            <div>
                                <label for="">От</label>
                                <input value="0" type="text">
                            </div>
                            <div>
                                <label for="">До</label>
                                <input value="240000" type="text">
                            </div>
                        </div>
                        <div class="price-range-slider">
                            <div class="price-range-slider-group">
                                <span class="price-range-slider-min">0</span>
                                <span class="price-range-slider-max">480000</span>
                            </div>
                            <input type="range">
                        </div>
                    </div>
                </div>
                <!-- Manufacturer Filter -->
                <div class="filter-panel-manufacturer">
                    <div class="filter-panel-block">
                        <div class="filter-panel-group">
                            <span class="filter-title">Производитель</span>
                            <button class="filter-manufacturer-btn filter-btn" type="button">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5L5 1L9 5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        <button class="filter-reset-btn" type="reset">Сбросить</button>
                    </div>
                    <div class="manufacturer-block">
                        <ul class="manufacturer-list">
                            <li class="manufacturer-item">
                                <input id="grostFilter" class="custom-checkbox" type="checkbox">
                                <label for="grostFilter">Grost</label>
                            </li>
                            <li class="manufacturer-item">
                                <input id="torFilter" class="custom-checkbox" type="checkbox">
                                <label for="torFilter">TOR</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Pick-up Height Filter -->
                <div class="filter-panel-height">
                    <div class="filter-panel-block">
                        <div class="filter-panel-group">
                            <span class="filter-title">Высота подхвата</span>
                            <button class="filter-height-btn filter-btn" type="button">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5L5 1L9 5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        <button class="filter-reset-btn" type="reset">Сбросить</button>
                    </div>
                    <div class="height-block">
                        <ul class="height-list">
                            <li class="height-item">
                                <input id="height220" class="custom-checkbox" type="checkbox">
                                <label for="height220">220 <span>(мм)</span></label>
                            </li>
                            <li class="height-item">
                                <input id="height50" class="custom-checkbox" type="checkbox">
                                <label for="height50">50 <span>(мм)</span></label>
                            </li>
                            <li class="height-item">
                                <input id="height60" class="custom-checkbox" type="checkbox">
                                <label for="height60">60 <span>(мм)</span></label>
                            </li>
                            <li class="height-item">
                                <input id="height70" class="custom-checkbox" type="checkbox">
                                <label for="height70">70 <span>(мм)</span></label>
                            </li>
                            <li class="height-item">
                                <input id="height75" class="custom-checkbox" type="checkbox">
                                <label for="height75">75 <span>(мм)</span></label>
                            </li>
                            <li class="height-item">
                                <input id="height85" class="custom-checkbox" type="checkbox">
                                <label for="height85">85 <span>(мм)</span></label>
                            </li>
                            <li class="height-item">
                                <input id="height90" class="custom-checkbox" type="checkbox">
                                <label for="height90">90 <span>(мм)</span></label>
                            </li>
                            <li class="height-item">
                                <input id="height95" class="custom-checkbox" type="checkbox">
                                <label for="height95">95 <span>(мм)</span></label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Part --><div class="<? echo $arCurView['CONT']; ?>"><?
            if ('Y' == $arParams['SHOW_PARENT_NAME'] && 0 < $arResult['SECTION']['ID'])
            {
                $this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

                ?><h1
                class="<? echo $arCurView['TITLE']; ?> category-page-title"
                id="<? echo $this->GetEditAreaId($arResult['SECTION']['ID']); ?>"
                ><?=$arResult['SECTION']['NAME']?></h1><?
            }
            if (0 < $arResult["SECTIONS_COUNT"])
            {
                ?><section>
                <div class="<? /*echo $arCurView['LIST'];*/ ?>father-category">
                    <?
                    switch ($arParams['VIEW_MODE'])
                    {
                    case 'LINE':
                        foreach ($arResult['SECTIONS'] as &$arSection)
                        {
                            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

                            if (false === $arSection['PICTURE'])
                                $arSection['PICTURE'] = array(
                                    'SRC' => $arCurView['EMPTY_IMG'],
                                    'ALT' => (
                                    '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                                        : $arSection["NAME"]
                                    ),
                                    'TITLE' => (
                                    '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                                        : $arSection["NAME"]
                                    )
                                );
                            ?><div id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
                            <a
                                    href="<? echo $arSection['SECTION_PAGE_URL']; ?>"
                                    class="bx_catalog_line_img"
                                    style="background-image: url('<? echo $arSection['PICTURE']['SRC']; ?>');"
                                    title="<? echo $arSection['PICTURE']['TITLE']; ?>"
                            ></a>
                            <h2><div class="category-card-group"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><?
                                    if ($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null)
                                    {
                                        ?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
                                    }
                                    ?></div></h2><?
                            if ('' != $arSection['DESCRIPTION'])
                            {
                                ?><p class="bx_catalog_line_description"><? echo $arSection['DESCRIPTION']; ?></p><?
                            }
                            ?><div style="clear: both;"></div>
                            </div><?
                        }
                        unset($arSection);
                        break;
                    case 'TEXT':
                        foreach ($arResult['SECTIONS'] as &$arSection)
                        {
                            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

                            ?><div id="<? echo $this->GetEditAreaId($arSection['ID']); ?>"><h2 class="bx_catalog_text_title"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><?
                                if ($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null)
                                {
                                    ?> <span><? echo $arSection['ELEMENT_CNT']; ?></span><?
                                }
                                ?></h2></div><?
                        }
                        unset($arSection);
                        break;
                    case 'TILE':
                        foreach ($arResult['SECTIONS'] as &$arSection)
                        {
                            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

                            if (false === $arSection['PICTURE'])
                                $arSection['PICTURE'] = array(
                                    'SRC' => $arCurView['EMPTY_IMG'],
                                    'ALT' => (
                                    '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                                        : $arSection["NAME"]
                                    ),
                                    'TITLE' => (
                                    '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                                        : $arSection["NAME"]
                                    )
                                );
                            ?><div id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
                        <a
                                href="<? echo $arSection['SECTION_PAGE_URL']; ?>"
                                class="bx_catalog_tile_img"
                                style="background-image:url('<? echo $arSection['PICTURE']['SRC']; ?>');"
                                title="<? echo $arSection['PICTURE']['TITLE']; ?>"
                        > </a><?
                            if ('Y' != $arParams['HIDE_SECTION_NAME'])
                            {
                                ?><h2 class="bx_catalog_tile_title"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><?
                                if ($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null)
                                {
                                    ?> <span style="display:none;"><? echo $arSection['ELEMENT_CNT']; ?> товаров</span><?
                                }
                                ?></h2><?
                            }
                            ?></div><?
                        }
                        unset($arSection);
                        break;
                    case 'LIST':
                    $intCurrentDepth = 1;
                    $boolFirst = true;
                    foreach ($arResult['SECTIONS'] as &$arSection)
                    {
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

                    if ($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL'])
                    {
                        if (0 < $intCurrentDepth)
                            echo "\n",str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']),'<ul class="category-list">';
                    }
                    elseif ($intCurrentDepth == $arSection['RELATIVE_DEPTH_LEVEL'])
                    {
                        if (!$boolFirst)
                            echo '</li>';
                    }
                    else
                    {
                        while ($intCurrentDepth > $arSection['RELATIVE_DEPTH_LEVEL'])
                        {
                            echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
                            $intCurrentDepth--;
                        }
                        echo str_repeat("\t", $intCurrentDepth-1),'</li>';
                    }

                    echo (!$boolFirst ? "\n" : ''),str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']);
                    ?><li id="<?=$this->GetEditAreaId($arSection['ID']);?>" class="<?if ($arSection['RELATIVE_DEPTH_LEVEL'] == 1) {?>first-class<?}?>"><a class="category-card" href="<? echo $arSection["SECTION_PAGE_URL"]; ?>"><div class="category-card-group"><h3 class="bx_sitemap_li_title"><? echo $arSection["NAME"];?>
                                </h3><?if ($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null)
                                {
                                    ?> <span><? echo $arSection["ELEMENT_CNT"]; ?> товаров</span><?
                                }
                                ?></div><img src="<? echo $arSection['PICTURE']['SRC']; ?>" alt="<? echo $arSection['PICTURE']['TITLE']; ?>"></a><?

                        $intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
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
                        break;
                        }
                        ?>
                </div></section>
                <?
                echo ('LINE' != $arParams['VIEW_MODE'] ? '<div style="clear: both;"></div>' : '');
            }
            ?></div></div></div>