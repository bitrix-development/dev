
    <footer class="footer">
        <div class="wrapper">
            <ul class="footer-list">
                <li class="footer-item">
                        <div class="footer-logo-block">
                            <img src="<?= SITE_TEMPLATE_PATH?>/images/youmet-logo.png" alt="Youmet">
                            <span>Оборудование для производства и строительства</span>
                        </div>
                        <div class="footer-contacts-block">
                            <div class="footer-contacts-group">
                                <a href="tel:+78005004914">+7 (800)500-49-14</a>
                                <a href="mailto:info@youmet.ru">info@youmet.ru</a>
                            </div>
                            <div class="footer-contacts-group">
                                <span>Пн-Пт с 8-00 до 18-00</span>
                                <span>Сб-Вс - выходной</span>
                            </div>
                        </div>
                        <span class="footer-yandex-rate">ЗДЕСЬ БУДЕТ РЕЙТИНГ ЯНДЕКСА</span>
                        <div class="footer-feedback-block">
                            <span>Оставить отзыв о нас:</span>
                            <div class="footer-feedback-group">
                                <img src="<?= SITE_TEMPLATE_PATH?>/images/yandex-img.png" alt="Yandex">
                                <img src="<?= SITE_TEMPLATE_PATH?>/images/google-img.png" alt="Google">
                            </div>
                        </div>
                </li>
                <li class="footer-item">
                        <span class="footer-yandex-rate-mobile">ЗДЕСЬ БУДЕТ РЕЙТИНГ ЯНДЕКСА</span>
                        <div class="footer-feedback-block-mobile">
                            <span>Оставить отзыв о нас:</span>
                            <div class="footer-feedback-group">
                                <img src="<?= SITE_TEMPLATE_PATH?>/images/yandex-img.png" alt="Yandex">
                                <img src="<?= SITE_TEMPLATE_PATH?>/images/google-img.png" alt="Google">
                            </div>
                        </div>
                </li>
                <li class="footer-item">
                    <div class="footer-list-title-group">
                        <span class="footer-list-title">Как купить</span>
                        <button class="footer-list-btn" type="button">
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L5 1L1 5" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </button>
                    </div>
<?$APPLICATION->IncludeComponent("bitrix:menu", "menu_footer", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "how_to_buy_bottom",
		"USE_EXT" => "N"
	)
);?>
                </li>
                <li class="footer-item">
                    <div class="footer-list-title-group">
                        <span class="footer-list-title">Каталог продукции</span>
                        <button class="footer-list-btn" type="button">
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L5 1L1 5" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </button>
                    </div>
<?$APPLICATION->IncludeComponent("bitrix:menu", "menu_footer", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "catalog_bottom",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>

                </li>
                <li class="footer-item">
                    <div class="footer-list-title-group">
                        <span class="footer-list-title">Пресс-центр</span>
                        <button class="footer-list-btn" type="button">
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L5 1L1 5" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </button>
                    </div>
<?$APPLICATION->IncludeComponent("bitrix:menu", "menu_footer", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "press_bottom",
		"USE_EXT" => "N"
	)
);?>
                </li>
                <li class="footer-item">
                    <div class="footer-list-title-group">
                        <span class="footer-list-title">О Компании</span>
                        <button class="footer-list-btn" type="button">
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L5 1L1 5" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </button>
                    </div>
<?$APPLICATION->IncludeComponent("bitrix:menu", "menu_footer", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "about_bottom",
		"USE_EXT" => "N"
	)
);?>
                </li>
            </ul>
            <ul class="footer-bottom-list">
                <li class="footer-item">
                    <p class="footer-company-desc">
                        «YOUMET © 2015 — 2023» Вся информация
                        на сайте о товарах носит справочный характер 
                        и не является публичной офертой в соответствии 
                        с пунктом 2 статьи 437 ГК РФ. 
                    </p>
                    <span class="footer-company-title">ООО "ЮМЕТ" ИНН 7720328944</span>
                </li>
                <li class="footer-item">
                    <ul class="footer-social-list">
                        <li class="footer-social-item">
                            <a target="_blank" href="#">
                                <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/vk-icon.png" alt="">
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a target="_blank" href="#">
                                <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/dark-icon.png" alt="">
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a target="_blank" href="#">
                                <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/youtube-icon.png" alt="">
                            </a>
                        </li>
                        <li class="footer-social-item">
                            <a target="_blank" href="#">
                                <img src="<?= SITE_TEMPLATE_PATH?>/images/icons/whatsapp-icon.png" alt="">
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer-item">
                    <span class="footer-pay-title">Способы оплаты</span>
                    <ul class="footer-pay-list">
                        <li class="footer-pay-item">
                            <img src="<?= SITE_TEMPLATE_PATH?>/images/alfa-bank-logo.png" alt="Alfa Bank">
                        </li>
                        <li class="footer-pay-item">
                            <img src="<?= SITE_TEMPLATE_PATH?>/images/sberbank-logo.png" alt="Сбер">
                        </li>
                        <li class="footer-pay-item">
                            <img src="<?= SITE_TEMPLATE_PATH?>/images/money-logo.png" alt="">
                        </li>
                        <li class="footer-pay-item">
                            <img src="<?= SITE_TEMPLATE_PATH?>/images/list-logo.png" alt="">
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </footer>
    <div class="base-modal">
        <div class="base-wrapper">
            <div class="base-modal-header">
                <span class="base-modal-title">Ваша заявка отправлена</span>
            </div>
            <div class="base-modal-body">
                <p class="base-modal-desc">В ближайшее время с вами свяжется наш администратор</p>
                <button class="base-modal-btn" type="button">Вернуться</button>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10.1.0/swiper-bundle.min.js"></script>
	<script src="<?= SITE_TEMPLATE_PATH?>/lightzoom/lightzoom.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH?>/js/jquery.morecontent.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH?>/js/slider.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH?>/js/main.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<!-- Создаём карту -->
    <script type="text/javascript">
        // Функция ymaps.ready() будет вызвана, когда
        // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
        ymaps.ready(init);
    
        function init() {
            // Создание карты.
            // https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/map-docpage/
            var myMap = new ymaps.Map("map", {
                // Координаты центра карты.
                // Порядок по умолчнию: «широта, долгота».
                center: [55.721305, 37.770978],
                // Уровень масштабирования. Допустимые значения:
                // от 0 (весь мир) до 19.
                zoom: 17,			
                // Элементы управления
                // https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/controls/standard-docpage/
                controls: [
    
                    'zoomControl', // Ползунок масштаба
                    'rulerControl', // Линейка
                    'routeButtonControl', // Панель маршрутизации
                    'trafficControl', // Пробки
                    'typeSelector', // Переключатель слоев карты
                    'fullscreenControl', // Полноэкранный режим
    
                    // Поисковая строка
                    new ymaps.control.SearchControl({
                        options: {
                            // вид - поисковая строка
                            size: 'large',
                            // Включим возможность искать не только топонимы, но и организации.
                            provider: 'yandex#search'
                        }
                    })
                    
    
                ]
            });
            myMap.behaviors.disable('scrollZoom');
                    // Добавление метки
                    // https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/Placemark-docpage/
                    var myPlacemark = new ymaps.Placemark([55.721305, 37.770978], {
                        // Хинт показывается при наведении мышкой на иконку метки.
                        hintContent: 'г. Москва, Рязанский пр-т, дом 22 корп.2, этаж 9',
                        // Балун откроется при клике по метке.
                        // balloonContent: 'Youmet'
                    });
            
                    // После того как метка была создана, добавляем её на карту.
                    myMap.geoObjects.add(myPlacemark);
            
                }
    </script>
</body>
</html>