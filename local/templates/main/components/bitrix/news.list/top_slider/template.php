<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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


if (!empty($arResult['ITEMS'])): ?>
    <section class="site-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme home-slider">

                        <?php foreach ($arResult['ITEMS'] as $arItem): ?>


                            <div>
                                <!-- Вывод фото и ссылки -->
                                <?php if (!empty($arItem['DETAIL_PAGE_URL'])): ?>
                                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"
                                   class="a-block d-flex align-items-center height-lg"
                                   style="background-image: url(<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>); ">
                                    <?php endif; ?>

                                    <div class="text half-to-full">
                                        <div class="post-meta">

                                            <?php //Получаем название категории
                                            $res = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
                                            $ar_res = $res->GetNext();
                                            $arItem['SECTION_NAME'] = $ar_res['NAME'];
                                            ?>
                                            <!-- Вывод категории -->
                                            <?php if (!empty($arItem['SECTION_NAME'])): ?>
                                                <span class="category"><?= $arItem['SECTION_NAME']; ?></span>
                                            <?php endif; ?>

                                            <!-- Вывод даты создания -->
                                            <?php if (!empty($arItem['PREVIEW_PICTURE']['TIMESTAMP_X'])): ?>
                                                <span class="mr-2"><?= (FormatDate("d F Y", $arItem['PREVIEW_PICTURE']['TIMESTAMP_X'])); ?></span>
                                            <?php endif; ?>

                                        </div>
                                        <!-- Вывод названия и описания -->
                                        <h3><?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?></h3>
                                        <p><?= isset($arItem['PREVIEW_TEXT']) ? substr($arItem['PREVIEW_TEXT'],0, 150) : ''; ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>




