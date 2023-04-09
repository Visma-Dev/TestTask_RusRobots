<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

//Вывод списка разделов
$rsSections = CIBlockSection::GetList(
        [],
        ['IBLOCK_ID' => $arParams ['IBLOCK_ID'], 'CODE' => $arResult['VARIABLES']['SECTION_CODE']]
);

if (!empty($arResult["ITEMS"])): ?>
    <section class="site-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">

                    <!-- Вывод названия категории -->
                    <h2 class="mb-4">Category: <?=$arResult['SECTION']['PATH'][0]['NAME']?></h2>

                </div>
            </div>

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row mb-5 mt-5">
                        <div class="col-md-12">

                            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                                <div class="post-entry-horzontal">

                                    <!-- Вывод фото и ссылки -->
                                    <a href="<?= $arItem ['DETAIL_PAGE_URL']?>">

                                        <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                                            <div class="image element-animate"
                                             data-animate-effect="fadeIn"
                                             style="background-image: url(<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>);">
                                            </div>
                                        <?php endif; ?>

                                    <span class="text">
                                        <div class="post-meta">

                                            <!-- Вывод Категории -->
                                            <span class="category">
                                                 <?php if ($arSection = $rsSections->Fetch()) {
                                                     echo $arSection['NAME'];
                                                 } ?>
                                            </span>

                                            <!-- Вывод даты создания -->
                                            <?php if (!empty($arItem['PREVIEW_PICTURE']['TIMESTAMP_X'])): ?>
                                                <span class="mr-2">
                                                <?= (FormatDate("d F Y", $arItem['PREVIEW_PICTURE']['TIMESTAMP_X'])); ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Вывод Названия элемента -->
                                        <h2><?=$arItem['NAME']?></h2>
                                    </span>
                                    </a>
                                </div>
                            <?php endforeach;?>

                        </div>
                    </div>
                </div>
<?php endif?>
