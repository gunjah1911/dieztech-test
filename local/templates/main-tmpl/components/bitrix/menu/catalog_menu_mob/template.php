<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var TYPE_NAME $parentCategoryLink */
/** @var TYPE_NAME $prevItemLvl */

$parentCategoryLink = '';
$prevItemLvl = 0;
?>

<? if (!empty($arResult)):?>
    <div class="category">
        <div class="category__wrapper">
    <? foreach ($arResult as $arItem):
        if ($arItem["DEPTH_LEVEL"] < $prevItemLvl):?>
                    <li>
                        <a class="link-more" href="<?=$parentCategoryLink?>">смотреть все</a>
                    </li>
                </ul>
            </div>
        <?endif;?>

        <?if ($arItem["DEPTH_LEVEL"] == 1)://1 уровень ?>
            <div class="category__item" data-category-item>
                <a class="category__head" href="#">
                    <?=$arItem["TEXT"]?>
                </a>

            <?if ($arItem["IS_PARENT"] == 1)://есть подкатегории
                $parentCategoryLink = $arItem["LINK"];?>
                <ul class="category__list" data-category-list>
            <?else:?>
                </div>
            <?endif;?>

        <? else://2 уровень ?>
                    <li>
                        <a class="category__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                    </li>
            <?if ($arItem["ITEM_INDEX"] == (count($arResult)-1)):?>
                        <li>
                            <a class="link-more" href="<?=$parentCategoryLink?>">смотреть все</a>
                        </li>
                    </ul>
                </div>
            <?endif;?>
        <?endif;?>


        <?$prevItemLvl = $arItem["DEPTH_LEVEL"];?>

    <?endforeach;?>

        </div>
    </div>
<?endif;?>

