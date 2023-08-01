<?php
/*2DO
добавить проверку на наличие значений у каждого из выводимых свойств
Стоит сделать опции для добавления светлого текста для класса article-intro__date--light
*/

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult["ITEMS"])):?>

<section class="section section--primary intro mb-90">
    <div class="slider" data-slider="intro">
        <div class="swiper" data-slide>
            <div class="swiper-wrapper slider__wrapper">

        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
                <div id="<?=$this->GetEditAreaId($arItem['ID'])?>" class="swiper-slide slider__item slider__item--field">
                    <article class="article-intro style="background-color:#<?=$arItem["PROPERTIES"]["BG_COLOR"]["VALUE"]?>">
                        <div class="article-intro__wrapper">
            <?if(is_array($arItem["DETAIL_PICTURE"]) && $arResult["USER_HAVE_ACCESS"]):?>

                <picture class="article-intro__picture">
                    <img
                            class="article-intro__img"
                            src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"
                            alt="#"
                    >
                </picture>
            <?endif;?>

                <div class="article-intro__body">
                    <?if(is_array($arItem["PROPERTIES"]["ACCENT_TEXT"]))
                    echo '<p class="article-intro__new">'.$arItem["PROPERTIES"]["ACCENT_TEXT"]["VALUE"].'</p>';?>
                    <p class="article-intro__date"><?=$arItem["PROPERTIES"]["DATE_TEXT"]["VALUE"]?></p>
                    <h2 class="article-intro__title"><?=$arItem["NAME"]?></h2>

                    <p class="article-intro__slogan"><?=$arItem["PROPERTIES"]["SLOGAN_TEXT"]["VALUE"]?></p>
                    <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="button article-intro__button"><?=$arItem["PROPERTIES"]["BUTTON_TEXT"]["VALUE"]?></a>
                </div>
                <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>"
                   class="button article-intro__button article-intro__button--mobile"><?=$arItem["PROPERTIES"]["BUTTON_TEXT"]["VALUE"]?></a>
                        </div>
                    </article>
                </div>

        <?endforeach;?>

            </div>
        </div>
        <div class="slider__nav slider__nav--intro" data-nav>
            <div class="slider__button slider__button--middle slider__button--prev" data-button-prev>
                <svg>
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-scroll-arrow"></use>
                </svg>
            </div>
            <div class="slider__button slider__button--middle slider__button--next" data-button-next>
                <svg>
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/sprite/sprite.svg#icon-scroll-arrow"></use>
                </svg>
            </div>
        </div>
        <div class="slider__pagination" data-pagination></div>
    </div>
</section>

<?endif;?>

