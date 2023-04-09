<?php

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>

<div class="col-md-12 col-lg-4 sidebar">
    <div class="sidebar-box search-form-wrap">
        <form action="#" class="search-form">
            <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
            </div>
        </form>
    </div>
    <!-- END sidebar-box -->
    <div class="sidebar-box">
        <div class="bio text-center">

            <!-- Вкл.область Фото -->
            <?php $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH . "/includes/about_photo.php",
            ]); ?>
            <div class="bio-body">

                <!-- Вкл.область Имени -->
                <h2>
                    <?php $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/about_name.php",
                    ]); ?>
                </h2>

                <!-- Вкл.область Краткого описания -->
                <p>
                <?php $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH . "/includes/side_descript.php",
                ]); ?>
                </p>

                <!-- Вкл.область текста кнопки -->
                <p>
                    <a href="/about" class="btn btn-primary btn-sm">
                        <?php $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/side_button.php",
                        ]); ?>
                    </a>
                </p>

                <!-- Вкл.область Соц-сетей -->
                <p class="social">
                    <?php $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/side_social.php",
                    ]); ?>
                </p>

            </div>
        </div>
    </div>

</div>
<!-- END sidebar -->