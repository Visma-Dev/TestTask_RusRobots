<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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



if (!empty($arResult['ID'])): ?>
    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">

                    <!-- Вывод названия элемента -->
                    <h1 class="mb-4"><?= $arResult['NAME']; ?></h1>
                    <div class="post-meta">
                        <span class="category">
                                <?= $arResult['IBLOCK_NAME']; ?>
                            </span>
                        <span class="mr-2">
                            <?php if (!empty($arItem['PREVIEW_PICTURE']['TIMESTAMP_X'])): ?>
                                <span class="mr-2"><?= (FormatDate("d F Y", $arResult['IBLOCK']['TIMESTAMP_X'])); ?></span>
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="post-content-body">

                        <!-- Вывод текста из анонса -->
                        <p><?= $arResult['PREVIEW_TEXT']; ?></p>

                        <!-- Вывод файлов галереи -->
                        <?php if ($arResult['PROPERTIES']['GALLERY']['VALUE']): ?>
                            <div class="row mb-5">
                                <?php foreach ($arResult['PROPERTIES'] ['PHOTOS'] as $photo): ?>
                                    <div class="col-md-12 mb-4 element-animate">
                                        <img src="<?= $photo['src']?>" alt="Image placeholder" class="img-fluid">
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        <?php endif ?>

                        <!-- Вывод текста из вкладки подробно -->
                        <p><?= $arResult['DETAIL_TEXT']; ?></p>
                    </div>


                    <div class="pt-5">
                        <p>Category: <a href="<?= $arResult['IBLOCK_SRC']; ?>"><?=$arResult['IBLOCK_NAME']; ?></a></p>
                    </div>

                </div>

<!-- END section -->
<?php endif;?>