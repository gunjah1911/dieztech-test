<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/assets/site.webmanifest">
    <link rel="mask-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?
    $APPLICATION->ShowHead();
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
    $asset->addJs(SITE_TEMPLATE_PATH. '/js/bundle.js');
    $APPLICATION->ShowPanel();
    ?>


<body class="body" data-body>
<header class="header" data-header>
    <section class="section section--top-line">
        <div class="container">
            <div class="top-line">
                <div class="top-line__place">
                    <div class="select select--place">
                        <select class="select__wrapper" name="city" id="city">
                            <option value="Krasnodar">Краснодар</option>
                            <option value="Pyatigorsk">Пятигорск</option>
                            <option value="Sochi">Сочи</option>
                        </select>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH. '/include_areas/desk_open.php')
                    );?>
                </div>
                <div class="top-line__callback">
                    <p class="top-line__text top-line__text--bold">
                        Обратный звонок
                    </p>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH. '/include_areas/callback.php')
                    );?>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--header">
        <div class="container">
            <div class="header-body">
                <div class="header-body__wrapper">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH. '/include_areas/logo.php')
                    );?>
                    <nav class="header-body__nav nav" data-nav>
                        <button class="nav__link nav__link--menu nav__link--primary" data-catalog-button>
                            Каталог
                            <svg class="nav__icon">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-arrow-down"></use>
                            </svg>
                        </button>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top_menu",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "top",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "Y",
                                "COMPONENT_TEMPLATE" => "top_menu",
                                "COMPOSITE_FRAME_MODE" => "A",
                                "COMPOSITE_FRAME_TYPE" => "AUTO"
                            ),
                            false
                        );?>
                    </nav>
                    <div class="burger" data-burger>
                        <span class="burger__item"></span>
                    </div>
                    <a href="tel:88003070500" class="header-body__callback">
                        <svg class="header-body__icon">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-phone"></use>
                        </svg>
                        <span>8 (800) 3070 500</span>
                    </a>
                    <button class="close-btn" data-menu-close>
                        <svg class="close-btn__icon">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-close"></use>
                        </svg>
                    </button>
                </div>
                <div class="header-body__wrapper header-body__wrapper--menu" data-header-menu>
                    <form class="search-box" data-search-box>
                        <div class="search" data-search>
                            <svg class="search__icon" data-icon>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-search"></use>
                            </svg>
                            <input class="search__input" class="search__input" type="text" placeholder="Введите запрос" data-search="input">
                        </div>
                        <button class="search-box__button button button--field">Найти</button>
                        <div class="search-box__close" data-close>
                            <svg class="search-box__icon search-box__icon--close">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-close"></use>
                            </svg>
                        </div>
                    </form>
                    <div class="nav-user" data-nav-user>
                        <a href="#" class="nav-user__item">
                            <svg class="nav-user__icon">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-layout"></use>
                            </svg>
                        </a>
                        <a href="#" class="nav-user__item nav-user__basket">
                            <svg class="nav-user__icon">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-basket"></use>
                            </svg>
                            <span class="nav-user__counter">22</span>
                        </a>
                        <a href="#" class="nav-user__item" data-show="1">
                            <svg class="nav-user__icon">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-user"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="header-body__dropdown dropdown hide" data-hide="1">
                        <ul class="dropdown__list">
                            <li class="dropdown__item">
                                <a href="#" class="dropdown__link">Мои заказы</a>
                            </li>
                            <li class="dropdown__item">
                                <a href="#" class="dropdown__link">Личные данные</a>
                            </li>
                            <li class="dropdown__line"></li>
                            <li class="dropdown__item">
                                <a href="#" class="dropdown__link">Выйти</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--category dropdown-header" data-dropdown-header>
        <div class="section__wrapper" data-category>
            <div class="container">
                <div class="search-box mbm-20 desktop-hidden" data-search-box>
                    <div class="search" data-search>
                        <svg class="search__icon" data-icon>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-search"></use>
                        </svg>
                        <input class="search__input" type="text" placeholder="Введите запрос" data-search="input">
                    </div>
                </div>
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "catalog_menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "catalog",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "ROOT_MENU_TYPE" => "catalog",
                        "USE_EXT" => "Y",
                        "COMPONENT_TEMPLATE" => "catalog_menu",
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO"
                    ),
                    false
                );?>

<?//Не разобрался где ввводится этот блок (до тега section), но без него верстка ломается ?>
                <div class="category__wrapper category__wrapper--flex" data-category-wrapper-category>
                    <a href="#" class="link-back" data-category-back>
                        <svg class="link-back__icon">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-arrow-down"></use>
                        </svg>
                        Назад
                    </a>
                    <div class="category__item" data-category-item>
                        <a class="category__head" href="#">
                            <img class="category__icon" src="<?=SITE_TEMPLATE_PATH?>/assets/sprite/icon-category-lepnina.svg" alt="">
                            Интерьерная лепнина
                        </a>
                        <ul class="category__list category__list--column" data-category-list>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                            <li>
                                <a class="category__link" href="#">Категория</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="section section--dropdown" data-dropdown>
        <div class="container">
            <div class="dropdown-search">
                <h2 class="dropdown-search__title">Вы уже искали</h2>
                <ul class="dropdown-search__list">
                    <li class="dropdown-search__item">Карнизы</li>
                    <li class="dropdown-search__item">Молдинги</li>
                    <li class="dropdown-search__item">Плинтусы</li>
                    <li class="dropdown-search__item">Архитравы</li>
                    <li class="dropdown-search__item">Колонны и полуколонны</li>
                    <li class="dropdown-search__item">Кессоны и купола</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section--menu">
        <div class="container">
            <div class="header-menu">
                <div class="header-menu__top">
                    <div class="select select--place">
                        <select class="select__wrapper" name="city" id="city-m">
                            <option value="Krasnodar">Краснодар</option>
                            <option value="Pyatigorsk">Пятигорск</option>
                            <option value="Sochi">Сочи</option>
                        </select>
                    </div>
                    <div class="header-menu__open">
                        <p class="header-menu__text">пн-пт: 09:00 – 21:00</p>
                        <p class="header-menu__text">сб-вс: 09:00 – 18:00</p>
                    </div>
                </div>
                <div class="header-menu__nav-user">
                    <form class="search-box" data-search-box>
                        <div class="search" data-search>
                            <svg class="search__icon" data-icon>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-search"></use>
                            </svg>
                            <input class="search__input" type="text" placeholder="Введите запрос" data-search="input">
                        </div>
                    </form>
                    <div class="nav-user nav-user--mobile" data-nav-user>
                        <a href="#" class="nav-user__item nav-user__basket">
                            <svg class="nav-user__icon">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-basket"></use>
                            </svg>
                            Корзина
                        </a>
                        <a href="#" class="nav-user__item">
                            <svg class="nav-user__icon">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-orders"></use>
                            </svg>
                            Мои проекты
                        </a>
                        <a href="#" class="nav-user__item">
                            <svg class="nav-user__icon">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-layout"></use>
                            </svg>
                            Мои заказы
                        </a>
                        <a href="#" class="nav-user__item" data-show="1">
                            <svg class="nav-user__icon">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-user"></use>
                            </svg>
                            Личный кабинет
                        </a>
                    </div>
                </div>
                <div class="header-menu__nav">
                    <ul class="nav nav--mobile" data-nav>
                        <li class="nav__link">
                            Каталог
                            <?
                            $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "catalog_menu_mob",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "catalog",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "2",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "N",
                                    "ROOT_MENU_TYPE" => "catalog",
                                    "USE_EXT" => "Y",
                                    "COMPONENT_TEMPLATE" => "catalog_menu_mob",
                                    "COMPOSITE_FRAME_MODE" => "A",
                                    "COMPOSITE_FRAME_TYPE" => "AUTO"
                                ),
                                false
                            );?>
                        </li>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top_menu",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "top",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "Y",
                                "COMPONENT_TEMPLATE" => "top_menu",
                                "COMPOSITE_FRAME_MODE" => "A",
                                "COMPOSITE_FRAME_TYPE" => "AUTO"
                            ),
                            false
                        );?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</header>
