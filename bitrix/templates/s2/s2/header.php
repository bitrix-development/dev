<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<?$curPage = $APPLICATION->GetCurPage(true);?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/swiper@10.1.0/swiper-bundle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH?>/lightzoom/style.css" type="text/css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH?>/styles/style.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH?>/styles/adaptive.css">

    <title><?$APPLICATION->ShowTitle()?></title>
<? $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<?/*$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('main', 'onMainGeoIpHandlersBuildList', function()
    {
        return new \Bitrix\Main\EventResult(
            \Bitrix\Main\EventResult::SUCCESS,
            [
                '\DaData' => '/local/DaData.php',
            ],
            'main'
        );
    });

$ipAddress = \Bitrix\Main\Service\GeoIp\Manager::getRealIp();

$locData = \Bitrix\Main\Service\GeoIp\Manager::getDataResult($ipAddress, LANGUAGE_ID);

$geoData = $locData->getGeoData();
$geoDatat = $geoData->cityName;*/?>
<header class="header">
    <div class="wrapper">
        <div class="header-container">
            <div class="header-nav-block">
                <div class="header-group">
                    <a class="header-logo" href="#">
                        <img src="<?= SITE_TEMPLATE_PATH?>/images/youmet-logo.png" alt="Youmet">
						<p>Оборудование для производства и строительства</p>
                        </a>
                        <div>
                            <div class="header-tel-group">
                                <span></span>
                                <a href="tel:+78005004914">+7 (800) 500-49-14</a>
                            </div>


                            <div class="header-address-group">
                                <span></span>
                                <a href="#"><?echo $geoDatat;?></a>
                            </div>
                        </div>
                    </div>
                    <nav class="header-nav">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_top", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu_top"
	),
	false
);?>
                       
                    </nav>
                    <a class="header-btn" href="#">
                        <span class="header-btn-icon"></span>
                        <span class="header-btn-entry">Вход</span>
                        <span class="header-btn-register">Регистрация</span>
                    </a>
                </div>
                <div class="header-menu-block">
                    <ul class="header-menu-list">
                        <li class="header-menu-item">
                            <a href="#">Станки</a>
                            <button class="header-menu-btn" type="button"></button>
                            <div class="header-menu-modal" style="display: none">
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по металлу <span>(2374)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки  для производства профилей <span>(80)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Листогибочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по дереву <span>(144)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-menu-item">
                            <a href="#">Стройка</a>
                            <button class="header-menu-btn" type="button"></button>
                            <div class="header-menu-modal" style="display: none">
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по металлу <span>(2374)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки  для производства профилей <span>(80)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Листогибочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по дереву <span>(144)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-menu-item">
                            <a href="#">Сварка</a>
                            <button class="header-menu-btn" type="button"></button>
                            <div class="header-menu-modal" style="display: none">
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по металлу <span>(2374)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки  для производства профилей <span>(80)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Листогибочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по дереву <span>(144)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-menu-item">
                            <a href="#">Климат</a>
                            <button class="header-menu-btn" type="button"></button>
                            <div class="header-menu-modal" style="display: none">
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по металлу <span>(2374)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки  для производства профилей <span>(80)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Листогибочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по дереву <span>(144)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-menu-item">
                            <a href="#">Автосервис</a>
                            <button class="header-menu-btn" type="button"></button>
                            <div class="header-menu-modal" style="display: none">
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по металлу <span>(2374)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки  для производства профилей <span>(80)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Листогибочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по дереву <span>(144)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-menu-item">
                            <a href="#">Склад</a>
                            <button class="header-menu-btn" type="button"></button>
                            <div class="header-menu-modal" style="display: none">
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по металлу <span>(2374)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки  для производства профилей <span>(80)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Листогибочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="header-modal-block">
                                        <span class="header-modal-title">Станки по дереву <span>(144)</span></span>
                                        <ul class="header-modal-list">
                                            <li class="header-modal-item">
                                                <a href="#">Токарные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверлильно фрезерные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Вальцовочные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Гильотинные ножницы</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Ленточнопильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Сверильные станки</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">На магнитной подошве</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Радиально сверлильные</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Трубогибы (профилегибы)</a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Станки с ЧПУ по металлу </a>
                                            </li>
                                            <li class="header-modal-item">
                                                <a href="#">Фальцепрокатные станки</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <form class="header-menu-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 17C13.9183 17 17.5 13.4183 17.5 9C17.5 4.58172 13.9183 1 9.5 1C5.08172 1 1.5 4.58172 1.5 9C1.5 13.4183 5.08172 17 9.5 17Z" stroke="#F7F7F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.5004 18.9999L15.1504 14.6499" stroke="#F7F7F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                            
                        </button>
                    </form>
                    <div class="header-menu-btns">
                        <a href="#">
                            <div class="header-menu-btns-icon">
                                <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33.7342 4.68345C32.8829 3.83179 31.8722 3.15619 30.7598 2.69525C29.6473 2.23432 28.455 1.99707 27.2509 1.99707C26.0467 1.99707 24.8544 2.23432 23.7419 2.69525C22.6295 3.15619 21.6188 3.83179 20.7675 4.68345L19.0009 6.45011L17.2342 4.68345C15.5147 2.96396 13.1826 1.99796 10.7508 1.99796C8.31913 1.99796 5.987 2.96396 4.26752 4.68345C2.54803 6.40293 1.58203 8.73506 1.58203 11.1668C1.58203 13.5985 2.54803 15.9306 4.26752 17.6501L6.03418 19.4168L19.0009 32.3834L31.9675 19.4168L33.7342 17.6501C34.5858 16.7989 35.2614 15.7881 35.7224 14.6757C36.1833 13.5633 36.4206 12.3709 36.4206 11.1668C36.4206 9.96263 36.1833 8.77029 35.7224 7.65785C35.2614 6.54542 34.5858 5.53471 33.7342 4.68345Z" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                
                                <span>0</span>
                            </div>
                            Избранное
                        </a>
                        <a href="#">
                            <div class="header-menu-btns-icon">
                                <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9987 37.4808C15.9192 37.4808 16.6654 36.7346 16.6654 35.8141C16.6654 34.8937 15.9192 34.1475 14.9987 34.1475C14.0782 34.1475 13.332 34.8937 13.332 35.8141C13.332 36.7346 14.0782 37.4808 14.9987 37.4808Z" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M33.3346 37.4808C34.2551 37.4808 35.0013 36.7346 35.0013 35.8141C35.0013 34.8937 34.2551 34.1475 33.3346 34.1475C32.4142 34.1475 31.668 34.8937 31.668 35.8141C31.668 36.7346 32.4142 37.4808 33.3346 37.4808Z" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1.66797 2.48145H8.33464L12.8013 24.7981C12.9537 25.5654 13.3711 26.2547 13.9805 26.7453C14.5899 27.2358 15.3525 27.4964 16.1346 27.4814H32.3346C33.1168 27.4964 33.8793 27.2358 34.4887 26.7453C35.0981 26.2547 35.5156 25.5654 35.668 24.7981L38.3346 10.8148H10.0013" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                                                
                                <span>0</span>
                            </div>
                            Корзина
                        </a>
                    </div>
                </div>
                <div class="header-mobile">
                    <div class="header-mobile-block">
                        <div class="header-mobile-group">
                            <div class="header-mobile-menu">
                                <button class="header-mobile-btn" type="button">
                                    <svg width="38" height="21" viewBox="0 0 38 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="2" y1="2.5" x2="36" y2="2.5" stroke="#333333" stroke-width="4" stroke-linecap="round"/>
                                        <line x1="2" y1="10.5" x2="36" y2="10.5" stroke="#333333" stroke-width="4" stroke-linecap="round"/>
                                        <line x1="2" y1="18.5" x2="36" y2="18.5" stroke="#333333" stroke-width="4" stroke-linecap="round"/>
                                    </svg>                            
                                </button>
                                <a href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH?>/images/youmet-logo-small.png" alt="Youmet">
                                </a>
                            </div>
                        </div>
                        <div class="header-mobile-group">
                            <div class="header-mobile-time">
                                <span class="header-mobile-time-title">Мы на связи</span>
                                <div class="header-mobile-time-group">
                                    <span>8-00</span>
                                    <span>18-00</span>
                                </div>
                            </div>
                            <div class="header-mobile-phone">
                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.7605 7.96005V9.46005C10.7611 9.5993 10.7334 9.73713 10.6793 9.86472C10.6251 9.99231 10.5458 10.1068 10.4462 10.201C10.3467 10.2951 10.2291 10.3668 10.1012 10.4114C9.97319 10.456 9.83759 10.4726 9.70304 10.46C8.21038 10.2929 6.77658 9.76712 5.51685 8.92505C4.34482 8.15738 3.35115 7.13313 2.6064 5.92505C1.78661 4.62065 1.27644 3.13555 1.11722 1.59005C1.1051 1.45178 1.12104 1.31243 1.16403 1.18086C1.20702 1.04929 1.27611 0.928393 1.36692 0.825859C1.45772 0.723325 1.56824 0.641403 1.69145 0.585309C1.81465 0.529216 1.94783 0.500179 2.08252 0.500048H3.53774C3.77315 0.49766 4.00137 0.583588 4.17986 0.741815C4.35836 0.900042 4.47494 1.11977 4.50789 1.36005C4.56931 1.84008 4.68322 2.31141 4.84744 2.76505C4.91271 2.94401 4.92683 3.13851 4.88814 3.32549C4.84946 3.51247 4.75958 3.6841 4.62916 3.82005L4.01311 4.45505C4.70364 5.70682 5.70916 6.74327 6.92356 7.45505L7.53961 6.82005C7.67149 6.68562 7.838 6.59297 8.0194 6.5531C8.2008 6.51322 8.38949 6.52778 8.56311 6.59505C9.00321 6.76432 9.46047 6.88174 9.92617 6.94505C10.1618 6.97931 10.377 7.10165 10.5308 7.2888C10.6847 7.47594 10.7664 7.71484 10.7605 7.96005Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                                      
                                <a href="tel:+78005004914">+7 (800)500-49-14</a>
                            </div>
                        </div>
                        <div class="header-mobile-group">
                            <div class="header-mobile-links">
                                <a class="header-mobile-register-link" href="#">
                                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_316_2717)">
                                            <path d="M20.1704 26.75V24.25C20.1704 22.9239 19.6607 21.6521 18.7532 20.7145C17.8458 19.7768 16.6151 19.25 15.3318 19.25H6.86407C5.58077 19.25 4.35004 19.7768 3.44261 20.7145C2.53518 21.6521 2.02539 22.9239 2.02539 24.25V26.75" stroke="#FF8126" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.0984 14.25C13.7708 14.25 15.9371 12.0114 15.9371 9.25C15.9371 6.48858 13.7708 4.25 11.0984 4.25C8.42612 4.25 6.25977 6.48858 6.25977 9.25C6.25977 12.0114 8.42612 14.25 11.0984 14.25Z" stroke="#FF8126" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M21.3809 14.25L23.8002 16.75L28.6389 11.75" stroke="#FF8126" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_316_2717">
                                            <rect width="29.0321" height="30" fill="white" transform="translate(0.816406 0.5)"/>
                                            </clipPath>
                                            </defs>
                                    </svg>
                                </a>
                                <a class="header-mobile-favorite-link" href="#">
                                    <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.8078 3.38547C23.2264 2.79778 22.5361 2.33159 21.7763 2.01352C21.0165 1.69545 20.2022 1.53174 19.3798 1.53174C18.5574 1.53174 17.7431 1.69545 16.9833 2.01352C16.2235 2.33159 15.5332 2.79778 14.9518 3.38547L13.7453 4.60456L12.5387 3.38547C11.3643 2.19894 9.77152 1.53235 8.11071 1.53235C6.4499 1.53235 4.85712 2.19894 3.68275 3.38547C2.50839 4.572 1.84863 6.18128 1.84863 7.85929C1.84863 9.5373 2.50839 11.1466 3.68275 12.3331L4.88934 13.5522L13.7453 22.4998L22.6012 13.5522L23.8078 12.3331C24.3894 11.7457 24.8508 11.0483 25.1656 10.2806C25.4805 9.51299 25.6425 8.69021 25.6425 7.85929C25.6425 7.02837 25.4805 6.20559 25.1656 5.43796C24.8508 4.67033 24.3894 3.97288 23.8078 3.38547Z" stroke="#FF8126" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>  
                                    <span>12</span>                                 
                                </a>
                                <a class="header-mobile-cart-link" href="#">
                                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.41419 23.9381C9.99297 23.9381 10.4622 23.4617 10.4622 22.8741C10.4622 22.2864 9.99297 21.8101 9.41419 21.8101C8.83541 21.8101 8.36621 22.2864 8.36621 22.8741C8.36621 23.4617 8.83541 23.9381 9.41419 23.9381Z" stroke="#FF8126" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20.9406 23.9381C21.5193 23.9381 21.9885 23.4617 21.9885 22.8741C21.9885 22.2864 21.5193 21.8101 20.9406 21.8101C20.3618 21.8101 19.8926 22.2864 19.8926 22.8741C19.8926 23.4617 20.3618 23.9381 20.9406 23.9381Z" stroke="#FF8126" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1.03125 1.59326H5.22317L8.03175 15.8406C8.12758 16.3304 8.39007 16.7705 8.77325 17.0837C9.15643 17.3969 9.63589 17.5632 10.1277 17.5537H20.3141C20.8059 17.5632 21.2854 17.3969 21.6685 17.0837C22.0517 16.7705 22.3142 16.3304 22.41 15.8406L24.0868 6.91339H6.27115" stroke="#FF8126" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>      
                                    <span>4</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <form class="header-menu-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 17C13.9183 17 17.5 13.4183 17.5 9C17.5 4.58172 13.9183 1 9.5 1C5.08172 1 1.5 4.58172 1.5 9C1.5 13.4183 5.08172 17 9.5 17Z" stroke="#F7F7F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M19.5004 18.9999L15.1504 14.6499" stroke="#F7F7F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                            
                        </button>
                    </form>
                </div>
                <div class="header-mobile-modal">
                    <div class="header-mobile-modal-block">
                        <div class="header-mobile-modal-top">
                            <div class="header-mobile-modal-group">
                                <a class="header-mobile-modal-logo" href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH?>/images/youmet-logo.png" alt="Youmet">
                                </a>
                                <div class="header-mobile-address-group">
                                    <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_7386)">
                                        <path d="M12.029 6.83418C12.029 11.2519 6.44517 15.0385 6.44517 15.0385C6.44517 15.0385 0.861328 11.2519 0.861328 6.83418C0.861328 5.32778 1.44962 3.88308 2.4968 2.8179C3.54397 1.75271 4.96425 1.1543 6.44517 1.1543C7.9261 1.1543 9.34638 1.75271 10.3936 2.8179C11.4407 3.88308 12.029 5.32778 12.029 6.83418Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.44527 8.72751C7.47322 8.72751 8.30655 7.87985 8.30655 6.83421C8.30655 5.78858 7.47322 4.94092 6.44527 4.94092C5.41731 4.94092 4.58398 5.78858 4.58398 6.83421C4.58398 7.87985 5.41731 8.72751 6.44527 8.72751Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_1_7386">
                                        <rect width="13" height="15.2841" fill="white" transform="translate(0 0.71582)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>                                    
                                    <span>Ваш город:</span>
                                    <a href="#">Москва</a>
                                </div>
                            </div>
                            <button class="header-mobile-modal-close" type="button">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 8L8 24" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 8L24 24" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                            </button>
                        </div>
                        <div class="header-mobile-modal-info">
                            <button class="header-mobile-modal-back" type="button">
                                <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 17L1 9L10 0.999999" stroke="#333333" stroke-linejoin="round"/>
                                </svg>
                                Назад
                            </button>
                            <span class="header-mobile-modal-title">Каталог</span>
                        </div>
                        <div class="header-mobile-modal-body">
                            <ul class="header-mobile-modal-list">
                                <li class="header-mobile-modal-item">
                                    <a href="#">Каталог</a>
                                    <button class="header-mobile-modal-btn" type="button">
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </button>
                                </li>
                                <li class="header-mobile-modal-item">
                                    <a href="#">О Компании</a>
                                    <button class="header-mobile-modal-btn" type="button">
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </button>
                                </li>
                                <li class="header-mobile-modal-item">
                                    <a href="#">Контакты</a>
                                    <button class="header-mobile-modal-btn" type="button">
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </button>
                                </li>
                                <li class="header-mobile-modal-item">
                                    <a href="#">Доставка</a>
                                    <button class="header-mobile-modal-btn" type="button">
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </button>
                                </li>
                                <li class="header-mobile-modal-item">
                                    <a href="#">Оплата</a>
                                    <button class="header-mobile-modal-btn" type="button">
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </button>
                                </li>
                                <li class="header-mobile-modal-item">
                                    <a href="#">Пресс-центр</a>
                                    <button class="header-mobile-modal-btn" type="button">
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </button>
                                </li>
                                <li class="header-mobile-modal-item">
                                    <a href="#">Клиентам</a>
                                    <button class="header-mobile-modal-btn" type="button">
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </button>
                                </li>
                                <li class="header-mobile-modal-item">
                                    <a href="#">Дисконт</a>
                                    <button class="header-mobile-modal-btn" type="button">
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </button>
                                </li>
                            </ul>
                            <ul class="header-mobile-nav">
                                <li class="header-mobile-nav-item">
                                    <div class="header-mobile-nav-group">
                                        <a href="#">Станки</a>
                                        <button class="header-mobile-nav-btn" type="button">
                                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                            
                                        </button>
                                    </div>
                                    <ul class="header-mobile-nav-inner">
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Все cтанки <span>(5462353)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по металлу <span>(2374)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки для производства профилей <span>(80)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по дереву <span>(144)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-mobile-nav-item">
                                    <div class="header-mobile-nav-group">
                                        <a href="#">Стройка</a>
                                        <button class="header-mobile-nav-btn" type="button">
                                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                            
                                        </button>
                                    </div>
                                    <ul class="header-mobile-nav-inner">
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Все cтанки <span>(5462353)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по металлу <span>(2374)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки для производства профилей <span>(80)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по дереву <span>(144)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-mobile-nav-item">
                                    <div class="header-mobile-nav-group">
                                        <a href="#">Сварка</a>
                                        <button class="header-mobile-nav-btn" type="button">
                                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                            
                                        </button>
                                    </div>
                                    <ul class="header-mobile-nav-inner">
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Все cтанки <span>(5462353)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по металлу <span>(2374)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки для производства профилей <span>(80)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по дереву <span>(144)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-mobile-nav-item">
                                    <div class="header-mobile-nav-group">
                                        <a href="#">Климат</a>
                                        <button class="header-mobile-nav-btn" type="button">
                                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                            
                                        </button>
                                    </div>
                                    <ul class="header-mobile-nav-inner">
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Все cтанки <span>(5462353)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по металлу <span>(2374)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки для производства профилей <span>(80)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по дереву <span>(144)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-mobile-nav-item">
                                    <div class="header-mobile-nav-group">
                                        <a href="#">Автосервис</a>
                                        <button class="header-mobile-nav-btn" type="button">
                                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                            
                                        </button>
                                    </div>
                                    <ul class="header-mobile-nav-inner">
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Все cтанки <span>(5462353)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по металлу <span>(2374)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки для производства профилей <span>(80)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по дереву <span>(144)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-mobile-nav-item">
                                    <div class="header-mobile-nav-group">
                                        <a href="#">Склад</a>
                                        <button class="header-mobile-nav-btn" type="button">
                                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                            
                                        </button>
                                    </div>
                                    <ul class="header-mobile-nav-inner">
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Все cтанки <span>(5462353)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по металлу <span>(2374)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки для производства профилей <span>(80)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                        <li class="header-mobile-inner-item">
                                            <a href="#">Станки по дереву <span>(144)</span></a>
                                            <button class="header-mobile-modal-btn" type="button">
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L7 7L1 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                            
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header-mobile-modal-bottom">
                            <div class="header-mobile-modal-phone">
                                <div>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.3332 13.0846V15.591C17.3341 15.8237 17.2866 16.054 17.1936 16.2672C17.1006 16.4804 16.9643 16.6718 16.7933 16.8291C16.6222 16.9864 16.4203 17.1062 16.2005 17.1807C15.9806 17.2552 15.7477 17.2829 15.5165 17.262C12.9522 16.9826 10.489 16.1041 8.32486 14.6971C6.31139 13.4143 4.60431 11.7028 3.32486 9.68418C1.91651 7.50458 1.04007 5.02303 0.76653 2.44057C0.745705 2.20953 0.773092 1.97668 0.846947 1.75683C0.920801 1.53699 1.03951 1.33497 1.1955 1.16364C1.3515 0.992308 1.54137 0.85542 1.75302 0.761689C1.96468 0.667959 2.19348 0.61944 2.42486 0.619222H4.92486C5.32928 0.615231 5.72136 0.758812 6.028 1.0232C6.33464 1.28759 6.53493 1.65475 6.59153 2.05625C6.69705 2.85836 6.89274 3.64594 7.17486 4.40395C7.28698 4.70298 7.31125 5.02798 7.24478 5.34042C7.17832 5.65286 7.02392 5.93965 6.79986 6.16681L5.74153 7.22787C6.92783 9.31953 8.65524 11.0514 10.7415 12.2407L11.7999 11.1797C12.0264 10.9551 12.3125 10.8003 12.6241 10.7336C12.9358 10.667 13.2599 10.6913 13.5582 10.8037C14.3143 11.0866 15.0998 11.2828 15.8999 11.3886C16.3047 11.4458 16.6744 11.6502 16.9386 11.9629C17.2029 12.2757 17.3433 12.6748 17.3332 13.0846Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                        
                                    <a href="tel:+78005004914">+7 (800) 500-49-14</a>
                                </div>
                                <div>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.3332 13.0846V15.591C17.3341 15.8237 17.2866 16.054 17.1936 16.2672C17.1006 16.4804 16.9643 16.6718 16.7933 16.8291C16.6222 16.9864 16.4203 17.1062 16.2005 17.1807C15.9806 17.2552 15.7477 17.2829 15.5165 17.262C12.9522 16.9826 10.489 16.1041 8.32486 14.6971C6.31139 13.4143 4.60431 11.7028 3.32486 9.68418C1.91651 7.50458 1.04007 5.02303 0.76653 2.44057C0.745705 2.20953 0.773092 1.97668 0.846947 1.75683C0.920801 1.53699 1.03951 1.33497 1.1955 1.16364C1.3515 0.992308 1.54137 0.85542 1.75302 0.761689C1.96468 0.667959 2.19348 0.61944 2.42486 0.619222H4.92486C5.32928 0.615231 5.72136 0.758812 6.028 1.0232C6.33464 1.28759 6.53493 1.65475 6.59153 2.05625C6.69705 2.85836 6.89274 3.64594 7.17486 4.40395C7.28698 4.70298 7.31125 5.02798 7.24478 5.34042C7.17832 5.65286 7.02392 5.93965 6.79986 6.16681L5.74153 7.22787C6.92783 9.31953 8.65524 11.0514 10.7415 12.2407L11.7999 11.1797C12.0264 10.9551 12.3125 10.8003 12.6241 10.7336C12.9358 10.667 13.2599 10.6913 13.5582 10.8037C14.3143 11.0866 15.0998 11.2828 15.8999 11.3886C16.3047 11.4458 16.6744 11.6502 16.9386 11.9629C17.2029 12.2757 17.3433 12.6748 17.3332 13.0846Z" stroke="#FF8126" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                        
                                    <a href="tel:+74955326102">+7 (495) 532-61-02</a>
                                </div>
                            </div>
                            <div class="header-mobile-modal-socials">
                                <a href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/vk-icon.png" alt="Вконтакте">
                                </a>
                                <a href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/youtube-icon.png" alt="Ютуб">
                                </a>
                                <a href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/whatsapp-icon.png" alt="Whatsapp">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
