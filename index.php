<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

<main class="main">
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider_homepage", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => IBLOCK_SLIDER_HOMEPAGE,
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "100",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "SLOGAN_TEXT",
			1 => "DATE_TEXT",
			2 => "BUTTON_TEXT",
            3 => "BG_COLOR",
            4 => "ACCENT_TEXT"
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider_homepage"
	),
	false
);?>
    <main class="main">

        <section class="section mb-100 mbm-60">
            <div class="container">
                <h2 class="title mb-30 mbm-20">Каталог</h2>
                <div class="grid-catalog">
                    <div class="grid-catalog__item grid-catalog__item--1">
                        <a href="/catalog.html" class="article-catalog">
                            <h3 class="article-catalog__title">Краски</h3>
                            <img class="article-catalog__img" src="https://via.placeholder.com/600/92c66"
                                 alt="Фото каталога 'Краски'">
                            <span class="article-catalog__button button button--transparent">Открыть категорию</span>
                        </a>
                    </div>
                    <div class="grid-catalog__item grid-catalog__item--2">
                        <a href="/catalog.html" class="article-catalog">
                            <h3 class="article-catalog__title">Ковры</h3>
                            <img class="article-catalog__img" src="https://via.placeholder.com/600/92c66"
                                 alt="Фото каталога 'Краски'">
                            <span class="article-catalog__button button button--transparent">Открыть категорию</span>
                        </a>
                    </div>
                    <div class="grid-catalog__item grid-catalog__item--3">
                        <a href="/catalog.html" class="article-catalog">
                            <h3 class="article-catalog__title">Лепнина, карнизы, молдинг</h3>
                            <img class="article-catalog__img" src="https://via.placeholder.com/600/92c66"
                                 alt="Фото каталога 'Краски'">
                            <span class="article-catalog__button button button--transparent">Открыть категорию</span>
                        </a>
                    </div>
                    <div class="grid-catalog__item grid-catalog__item--4">
                        <a href="/catalog.html" class="article-catalog">
                            <h3 class="article-catalog__title">Обои и фрески</h3>
                            <img class="article-catalog__img" src="https://via.placeholder.com/600/92c66"
                                 alt="Фото каталога 'Краски'">
                            <span class="article-catalog__button button button--transparent">Открыть категорию</span>
                        </a>
                    </div>
                    <div class="grid-catalog__item grid-catalog__item--5">
                        <a href="/catalog.html" class="article-catalog">
                            <h3 class="article-catalog__title">Декоративная штукатурка</h3>
                            <img class="article-catalog__img" src="https://via.placeholder.com/600/92c66"
                                 alt="Фото каталога 'Краски'">
                            <span class="article-catalog__button button button--transparent">Открыть категорию</span>
                        </a>
                    </div>
                    <div class="grid-catalog__item grid-catalog__item--6">
                        <a href="/catalog.html" class="article-catalog">
                            <h3 class="article-catalog__title">Мебель</h3>
                            <img class="article-catalog__img" src="https://via.placeholder.com/600/92c66"
                                 alt="Фото каталога 'Краски'">
                            <span class="article-catalog__button button button--transparent">Открыть категорию</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section mb-110 mbm-60">
            <div class="container container--field">
                <h2 class="title mb-30 mbm-20">Популярные товары</h2>
                <div class="slider" data-slider="products" data-mobile>
                    <div class="swiper" data-slide>
                        <div class="swiper-wrapper slider__wrapper slider__wrapper--mobile">
                            <div class="swiper-slide slider__item">
                                <article class="article-product">
                                    <picture class="article-product__picture" data-fancybox="product" data-src="#modal">
                                        <img class="article-product__img article-product__img--small"
                                             src="./assets/images/products/grunt.png"
                                             alt="">
                                    </picture>
                                    <div class="article-product__body">
                                        <h3 class="article-product__title">Молдинг 1.51.367 Европласт 1.53.111, 2000х124
                                            мм</h3>
                                    </div>
                                    <div class="article-product__footer">
                                        <p class="article-product__price">3 500<span>₽</span></p>
                                        <button class="button article-product__button">В корзину</button>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide slider__item">
                                <article class="article-product">
                                    <picture class="article-product__picture" data-fancybox="product" data-src="#modal">
                                        <img class="article-product__img article-product__img--small"
                                             src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                    </picture>
                                    <div class="article-product__body">
                                        <h3 class="article-product__title">Плинтус Европласт 1.53.111, 65х20, 2 м. Плинтус
                                            Европласт</h3>
                                    </div>
                                    <div class="article-product__footer">
                                        <p class="article-product__price">3 500<span>₽</span></p>
                                        <button class="button article-product__button">В корзину</button>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide slider__item">
                                <article class="article-product">
                                    <picture class="article-product__picture" data-fancybox="product" data-src="#modal">
                                        <img class="article-product__img article-product__img--small"
                                             src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                    </picture>
                                    <div class="article-product__body">
                                        <h3 class="article-product__title">Молдинг гибкий 1.51.367 Европласт 1.53.111,
                                            2000х124 мм</h3>
                                    </div>
                                    <div class="article-product__footer">
                                        <p class="article-product__price">3 500<span>₽</span></p>
                                        <button class="button article-product__button">В корзину</button>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide slider__item">
                                <article class="article-product">
                                    <picture class="article-product__picture" data-fancybox="product" data-src="#modal">
                                        <img class="article-product__img article-product__img--small"
                                             src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                    </picture>
                                    <div class="article-product__body">
                                        <h3 class="article-product__title">Плинтус Европласт 1.53.111, 65х20, 2 м. Плинтус
                                            Европласт</h3>
                                    </div>
                                    <div class="article-product__footer">
                                        <p class="article-product__price">3 500<span>₽</span></p>
                                        <button class="button article-product__button">В корзину</button>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide slider__item">
                                <article class="article-product">
                                    <picture class="article-product__picture" data-fancybox="product" data-src="#modal">
                                        <img class="article-product__img article-product__img--small"
                                             src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                    </picture>
                                    <div class="article-product__body">
                                        <h3 class="article-product__title">Плинтус Европласт 1.53.111, 65х20, 2 м. Плинтус
                                            Европласт</h3>
                                    </div>
                                    <div class="article-product__footer">
                                        <p class="article-product__price">3 500<span>₽</span></p>
                                        <button class="button article-product__button">В корзину</button>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" data-nav>
                        <div class="slider__button slider__button--gray slider__button--prev" data-button-prev>
                            <svg>
                                <use xlink:href="./assets/sprite/sprite.svg#icon-scroll-arrow"></use>
                            </svg>
                        </div>
                        <div class="slider__button slider__button--gray slider__button--next" data-button-next>
                            <svg>
                                <use xlink:href="./assets/sprite/sprite.svg#icon-scroll-arrow"></use>
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="link-more link-more--mobile">Смотреть все товары</a>
                </div>
            </div>
        </section>
        <section class="section mb-100 mbm-70">
            <div class="container container--field">
                <h2 class="title mb-30 mbm-20">Текстуры и цвет</h2>
                <div class="slider" data-slider="textures" data-mobile>
                    <div class="swiper" data-slide>
                        <div class="swiper-wrapper slider__wrapper slider__wrapper--mobile">
                            <div class="swiper-slide slider__item">
                                <article class="article-product">
                                    <picture class="article-product__picture" data-fancybox="product" data-src="#modal">
                                        <img class="article-product__img" src="./assets/images/textures/textures-1.jpg"
                                             alt="">
                                    </picture>
                                    <div class="article-product__body">
                                        <h3 class="article-product__title">Декоративная штукатурка Goldshell Велюр
                                            «Графит»</h3>
                                    </div>
                                    <div class="article-product__footer">
                                        <p class="article-product__price">3 500<span>₽</span></p>
                                        <button class="button article-product__button">В корзину</button>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide slider__item">
                                <article class="article-product">
                                    <picture class="article-product__picture" data-fancybox="product" data-src="#modal">
                                        <img class="article-product__img" src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                    </picture>
                                    <div class="article-product__body">
                                        <h3 class="article-product__title">Обои Hygge Plamp H1101, Бесшовные</h3>
                                    </div>
                                    <div class="article-product__footer">
                                        <p class="article-product__price">3 500<span>₽</span></p>
                                        <button class="button article-product__button">В корзину</button>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide slider__item">
                                <article class="article-product">
                                    <picture class="article-product__picture" data-fancybox="product" data-src="#modal">
                                        <img class="article-product__img" src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                    </picture>
                                    <div class="article-product__body">
                                        <h3 class="article-product__title">Декоративная штукатурка Goldshell Велюр
                                            «Графит»</h3>
                                    </div>
                                    <div class="article-product__footer">
                                        <p class="article-product__price">3 500<span>₽</span></p>
                                        <button class="button article-product__button">В корзину</button>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide slider__item">
                                <article class="article-product">
                                    <picture class="article-product__picture" data-fancybox="product" data-src="#modal">
                                        <img class="article-product__img" src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                    </picture>
                                    <div class="article-product__body">
                                        <h3 class="article-product__title">Обои Hygge Plamp H1101, Бесшовные</h3>
                                    </div>
                                    <div class="article-product__footer">
                                        <p class="article-product__price">3 500<span>₽</span></p>
                                        <button class="button article-product__button">В корзину</button>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide slider__item">
                                <article class="article-product">
                                    <picture class="article-product__picture" data-fancybox="product" data-src="#modal">
                                        <img class="article-product__img" src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                    </picture>
                                    <div class="article-product__body">
                                        <h3 class="article-product__title">Плинтус Европласт 1.53.111, 65х20, 2 м. Плинтус
                                            Европласт</h3>
                                    </div>
                                    <div class="article-product__footer">
                                        <p class="article-product__price">3 500<span>₽</span></p>
                                        <button class="button article-product__button">В корзину</button>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" data-nav>
                        <div class="slider__button slider__button--gray slider__button--prev" data-button-prev>
                            <svg>
                                <use xlink:href="./assets/sprite/sprite.svg#icon-scroll-arrow"></use>
                            </svg>
                        </div>
                        <div class="slider__button slider__button--gray slider__button--next" data-button-next>
                            <svg>
                                <use xlink:href="./assets/sprite/sprite.svg#icon-scroll-arrow"></use>
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="link-more link-more--mobile">Смотреть все товары</a>
                </div>
            </div>
        </section>
        <section class="section section--feedback mb-100 mbm-50">
            <div class="container">
                <div class="feedback">
                    <div class="feedback__wrapper feedback__wrapper--text">
                        <h2 class="feedback__title">Задать вопрос</h2>
                        <p class="feedback__text">Если вам нужна помощь в подборе материалов или у вас есть вопросы оставьте
                            ваши данные для связи</p>
                    </div>
                    <div class="feedback__wrapper">
                        <form class="feedback__form form" action="/api/forms/questionForm" data-form data-agreement>
                            <fieldset class="form__wrapper">
                                <label class="form__item" data-input-item>
                                    <input
                                            class="input input--fill"
                                            type="text"
                                            name="USER_NAME"
                                            minlength="3"
                                            placeholder="Имя"
                                            required
                                            data-input="name"
                                    >
                                    <span class="form__warning" data-warning>
                                    <svg class="form__icon">
                                        <use xlink:href="./assets/sprite/sprite.svg#icon-attention-fill"></use>
                                    </svg>
                                    Поле заполнено некорректно
                                </span>
                                </label>
                                <label class="form__item" data-input-item>
                                    <input
                                            class="input input--fill"
                                            type="tel"
                                            name="USER_PHONE"
                                            placeholder="Телефон"
                                            pattern="[0-9]{3}[0-9]{3}[0-9]{5}"
                                            required
                                            data-input="phone"
                                    >
                                    <span class="form__warning">
                                    <svg class="form__icon">
                                        <use xlink:href="./assets/sprite/sprite.svg#icon-attention-fill"></use>
                                    </svg>
                                    Поле заполнено некорректно
                                </span>
                                </label>
                            </fieldset>
                            <label class="form__item" data-input-item>
                            <textarea
                                    class="input input--area input--fill"
                                    name="USER_QUESTION"
                                    placeholder="Ваш вопрос"
                                    required
                                    data-input="textarea"
                            ></textarea>
                                <span class="form__warning">
                                    <svg class="form__icon">
                                        <use xlink:href="./assets/sprite/sprite.svg#icon-attention-fill"></use>
                                    </svg>
                                    Поле заполнено некорректно
                                </span>
                            </label>
                            <fieldset class="form__wrapper form__wrapper-policy">
                                <button
                                        type="submit"
                                        class="form__button button button--middle button--field"
                                        data-submit
                                        data-agreement-button
                                >Отправить
                                </button>
                                <div class="form__policy">
                                    <label class="filter-checkbox filter-checkbox--policy">
                                        <input class="hidden" type="checkbox" name="POLICY_ACCEPT" data-agreement-checkbox>
                                        <span class="checkbox">
                                            <svg>
                                                <use xlink:href="./assets/sprite/sprite.svg#icon-accept-second"></use>
                                            </svg>
                                        </span>
                                        <span class="filter-checkbox__info">
                                        Cогласие на обработку персональных данных и соглашаетесь c <a href="#">политикой конфиденциальности</a>
                                    </span>
                                    </label>
                                </div>
                            </fieldset>
                            <p class="form__accepted" data-accept="2"><span>Успешно!</span> ваше сообщение отправлено</p>
                        </form>
                    </div>
                    <svg class="feedback__icon feedback__icon_orange">
                        <use xlink:href="./assets/sprite/sprite.svg#icon-vector-orange"></use>
                    </svg>
                    <svg class="feedback__icon feedback__icon_blue">
                        <use xlink:href="./assets/sprite/sprite.svg#icon-vector-blue"></use>
                    </svg>
                </div>
            </div>
        </section>
        <section class="section section--gray pt-60 pb-60 ptm-40 pbm-40 mb-110 mbm-60">
            <div class="container container--field">
                <h2 class="title mb-30 mbm-20">Блог</h2>
                <div class="slider" data-slider="blog">
                    <div class="swiper" data-slide>
                        <div class="swiper-wrapper slider__wrapper">
                            <div class="swiper-slide slider__item">
                                <a href="#" class="article-news article-news--slim">
                                    <div class="article-news__header">
                                        <img class="article-news__img" src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                        <time class="article-news__date" datetime="21.06.2022">21.06.22</time>
                                    </div>
                                    <div class="article-news__body">
                                        <h3 class="article-news__title">Краска Hygge. Почему мы выбираем именно ее?</h3>
                                        <p class="article-news__text">Рассказываем про интерьерную краску Hygge,
                                            особенности
                                            нанесения и свойства</p>
                                        <span class="link-more">Читать далее</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide slider__item">
                                <a href="#" class="article-news article-news--slim">
                                    <div class="article-news__header">
                                        <img class="article-news__img" src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                        <time class="article-news__date" datetime="21.06.2022">21.06.22</time>
                                    </div>
                                    <div class="article-news__body">
                                        <h3 class="article-news__title">Тренды 2023 в интерьере</h3>
                                        <p class="article-news__text">Расскажем о трендах в новом году от красок до
                                            мебели</p>
                                        <span class="link-more">Читать далее</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide slider__item">
                                <a href="#" class="article-news article-news--slim">
                                    <div class="article-news__header">
                                        <img class="article-news__img" src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                        <time class="article-news__date" datetime="21.06.2022">21.06.22</time>
                                    </div>
                                    <div class="article-news__body">
                                        <h3 class="article-news__title">Как правильно подобрать обои?</h3>
                                        <p class="article-news__text">Бывает ли идеальный ковер, миф или реальность</p>
                                        <span class="link-more">Читать далее</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide slider__item">
                                <a href="#" class="article-news article-news--slim">
                                    <div class="article-news__header">
                                        <img class="article-news__img" src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                        <time class="article-news__date" datetime="21.06.2022">21.06.22</time>
                                    </div>
                                    <div class="article-news__body">
                                        <h3 class="article-news__title">Краска Hygge. Почему мы выбираем именно ее?</h3>
                                        <p class="article-news__text">Рассказываем про особенности нанесения и свойства
                                            краски</p>
                                        <span class="link-more">Читать далее</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide slider__item">
                                <a href="#" class="article-news article-news--slim">
                                    <div class="article-news__header">
                                        <img class="article-news__img" src="https://via.placeholder.com/270/92c952"
                                             alt="">
                                        <time class="article-news__date" datetime="21.06.2022">21.06.22</time>
                                    </div>
                                    <div class="article-news__body">
                                        <h3 class="article-news__title">Краска Hygge. Почему мы выбираем именно ее?</h3>
                                        <p class="article-news__text">Рассказываем про интерьерную краску Hygge,
                                            особенности
                                            нанесения и свойства</p>
                                        <span class="link-more">Читать далее</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" data-nav>
                        <div class="slider__button slider__button--prev" data-button-prev>
                            <svg>
                                <use xlink:href="./assets/sprite/sprite.svg#icon-scroll-arrow"></use>
                            </svg>
                        </div>
                        <div class="slider__button slider__button--next" data-button-next>
                            <svg>
                                <use xlink:href="./assets/sprite/sprite.svg#icon-scroll-arrow"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--manual mb-100 mbm-50">
            <div class="container">
                <div class="manual">
                    <div class="manual__info">
                        <h2 class="manual__title title">Комплектация проектов в 3 шага</h2>
                        <p class="subtitle manual__subtitle">Мы создали новый удобный функционал для сбора «избранных»
                            товаров</p>
                        <img class="manual__img manual__img--mobile" src="./assets/images/project.png" alt="">
                        <ul class="manual__list">
                            <li class="manual__item">Создавайте проекты и комнаты</li>
                            <li class="manual__item">Наполняйте ваши комнаты товарами</li>
                            <li class="manual__item">Добавляйте проекты в корзину или формируйте коммерческое предложение
                                для клиентов
                            </li>
                        </ul>
                        <button class="button button--orange">Смотреть инструкцию</button>
                    </div>
                    <picture class="manual__picture">
                        <img class="manual__img" src="./assets/images/project.png" alt="">
                    </picture>
                </div>
            </div>
        </section>
        <section class="section mb-100 mbm-60">
            <div class="container">
                <div class="gallery">
                    <div class="gallery__info">
                        <h2 class="gallery__title title">Галерея готовых решений</h2>
                        <p class="gallery__subtitle subtitle">Готовые решения для дизайнерских
                            квартир от отделки до мебели</p>
                        <button class="button button--field">Смотреть проекты</button>
                    </div>
                    <div class="flex-gallery">
                        <div class="flex-gallery__box">
                            <div class="flex-gallery__item">
                                <article class="article-gallery">
                                    <img class="article-gallery__icon" src="https://via.placeholder.com/600/92c95" alt="">
                                </article>
                            </div>
                            <div class="flex-gallery__item">
                                <article class="article-gallery">
                                    <img class="article-gallery__icon" src="https://via.placeholder.com/600/92c95" alt="">
                                </article>
                            </div>
                        </div>
                        <div class="flex-gallery__item flex-gallery__item--full">
                            <article class="article-gallery">
                                <img class="article-gallery__icon" src="https://via.placeholder.com/300x1000/92c95" alt="">
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--services section--gray pt-60 pb-60 ptm-40 pbm-40">
            <div class="container">
                <h2 class="title mb-30 mbm-20">Услуги</h2>
                <div class="grid-services">
                    <div class="grid__item">
                        <article class="article-services article-services--slim">
                            <svg class="article-services__icon mb-20">
                                <use xlink:href="./assets/sprite/sprite.svg#icon-coler"></use>
                            </svg>
                            <div class="article-services__info mb-30">
                                <h3 class="article-services__title">Колеровка</h3>
                                <p class="article-services__text">Мы подберем для вас идеальный цвет. Таким образом,
                                    наши клиенты всегда могут получить желаемый оттенок!</p>
                            </div>
                            <a href="./services.html" class="link-more">Подробнее</a>
                        </article>
                    </div>
                    <div class="grid__item">
                        <article class="article-services article-services--slim">
                            <svg class="article-services__icon mb-20">
                                <use xlink:href="./assets/sprite/sprite.svg#icon-trans"></use>
                            </svg>
                            <div class="article-services__info mb-30">
                                <h3 class="article-services__title">Доставка</h3>
                                <p class="article-services__text">Оформите доставку на нашем сайте по всей России и мы
                                    доставим
                                    ваш груз в целостности и сохранности</p>
                            </div>
                            <a href="./services.html" class="link-more">Подробнее</a>
                        </article>
                    </div>
                    <div class="grid__item">
                        <article class="article-services article-services--slim">
                            <svg class="article-services__icon mb-20">
                                <use xlink:href="./assets/sprite/sprite.svg#icon-size"></use>
                            </svg>
                            <div class="article-services__info mb-30">
                                <h3 class="article-services__title">Замеры</h3>
                                <p class="article-services__text">га, способная дать максимально полные данные о
                                    необходимом количестве строительных материалов</p>
                            </div>
                            <a href="./services.html" class="link-more">Подробнее</a>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--manual pt-100 pb-90 ptm-40 pbm-50">
            <div class="container">
                <div class="manual">
                    <div class="manual__info">
                        <h2 class="manual__title title">Видео-консультация из Салона</h2>
                        <p class="subtitle manual__subtitle">Если вы не можете приехать в салон – наш менеджер проведет для
                            вас консультацию онлайн</p>
                        <img class="manual__img manual__img--mobile" src="./assets/images/phone.png" alt="">
                        <ul class="manual__list">
                            <li class="manual__item">Покажем интересующий вас товар</li>
                            <li class="manual__item">Узнаете размеры и что-то еще</li>
                            <li class="manual__item">Какие то еще пункты, описывающие услугу видео-консультации из салона
                            </li>
                        </ul>
                        <a href="#" class="link-more">Подробнее</a>
                    </div>
                    <picture class="manual__picture">
                        <img class="manual__img manual__img--phone" src="./assets/images/phone.png" alt="">
                    </picture>
                </div>
            </div>
        </section>
        <section class="section mb-100 mbm-60">
            <div class="container">
                <div class="about">
                    <div class="about__info">
                        <h2 class="title mb-30 mbm-20">О компании</h2>
                        <p class="about__text">Таким образом новая модель организационной деятельности влечет за собой
                            процесс внедрения и модернизации соответствующий условий активизации.</p>
                        <a href="#" class="link-more">Подробнее</a>
                    </div>
                    <div class="flex-gallery">
                        <div class="flex-gallery__box">
                            <div class="flex-gallery__item">
                                <article class="article-gallery">
                                    <img class="article-gallery__icon" src="https://via.placeholder.com/600/92c95" alt="">
                                </article>
                            </div>
                            <div class="flex-gallery__item">
                                <article class="article-gallery">
                                    <img class="article-gallery__icon" src="https://via.placeholder.com/600/92c95" alt="">
                                </article>
                            </div>
                        </div>
                        <div class="flex-gallery__item flex-gallery__item--full">
                            <article class="article-gallery">
                                <img class="article-gallery__icon" src="https://via.placeholder.com/300x1000/92c95" alt="">
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section mb-110 mbm-60">
            <div class="container">
                <div class="feedback">
                    <div class="feedback__wrapper feedback__wrapper--text">
                        <h2 class="feedback__title">Остались вопросы?</h2>
                        <p class="feedback__text">Если вам нужна помощь – оставьте свои данные и ваш вопрос, мы свяжемся с
                            вами в ближайшее время</p>
                    </div>
                    <div class="feedback__wrapper">
                        <form class="feedback__form form" action="/api/forms/questionForm" data-form data-agreement>
                            <fieldset class="form__wrapper">
                                <label class="form__item" data-input-item>
                                    <input
                                            class="input input--fill"
                                            type="text"
                                            name="USER_NAME"
                                            minlength="3"
                                            placeholder="Имя"
                                            required
                                            data-input="name"
                                    >
                                    <span class="form__warning" data-warning>
                                    <svg class="form__icon">
                                        <use xlink:href="./assets/sprite/sprite.svg#icon-attention-fill"></use>
                                    </svg>
                                    Поле заполнено некорректно
                                </span>
                                </label>
                                <label class="form__item" data-input-item>
                                    <input
                                            class="input input--fill"
                                            type="tel"
                                            name="USER_PHONE"
                                            placeholder="Телефон"
                                            pattern="[0-9]{3}[0-9]{3}[0-9]{5}"
                                            required
                                            data-input="phone"
                                    >
                                    <span class="form__warning">
                                    <svg class="form__icon">
                                        <use xlink:href="./assets/sprite/sprite.svg#icon-attention-fill"></use>
                                    </svg>
                                    Поле заполнено некорректно
                                </span>
                                </label>
                            </fieldset>
                            <label class="form__item" data-input-item>
                            <textarea
                                    class="input input--area input--fill"
                                    name="USER_QUESTION"
                                    placeholder="Ваш вопрос"
                                    required
                                    data-input="textarea"
                            ></textarea>
                                <span class="form__warning">
                                    <svg class="form__icon">
                                        <use xlink:href="./assets/sprite/sprite.svg#icon-attention-fill"></use>
                                    </svg>
                                    Поле заполнено некорректно
                                </span>
                            </label>
                            <fieldset class="form__wrapper form__wrapper-policy">
                                <button
                                        type="submit"
                                        class="form__button button button--middle button--field"
                                        data-submit
                                        data-agreement-button
                                >Отправить
                                </button>
                                <div class="form__policy">
                                    <label class="filter-checkbox filter-checkbox--policy">
                                        <input class="hidden" type="checkbox" name="POLICY_ACCEPT" data-agreement-checkbox>
                                        <span class="checkbox">
                                            <svg>
                                                <use xlink:href="./assets/sprite/sprite.svg#icon-accept-second"></use>
                                            </svg>
                                        </span>
                                        <span class="filter-checkbox__info">
                                        Cогласие на обработку персональных данных и соглашаетесь c <a href="#">политикой конфиденциальности</a>
                                    </span>
                                    </label>
                                </div>
                            </fieldset>
                            <p class="form__accepted" data-accept="2"><span>Успешно!</span> ваше сообщение отправлено</p>
                        </form>
                    </div>
                    <svg class="feedback__icon feedback__icon_orange">
                        <use xlink:href="./assets/sprite/sprite.svg#icon-vector-orange"></use>
                    </svg>
                    <svg class="feedback__icon feedback__icon_blue">
                        <use xlink:href="./assets/sprite/sprite.svg#icon-vector-blue"></use>
                    </svg>
                </div>
            </div>
        </section>*/?>
    </main>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
