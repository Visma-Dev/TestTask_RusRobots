<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

//Подключение css
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/animate.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.min.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/fonts/ionicons/css/ionicons.min.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/fonts/fontawesome/css/font-awesome.min.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/fonts/flaticon/font/flaticon.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');

//Подключение js
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery-3.2.1.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery-migrate-3.0.0.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/popper.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/owl.carousel.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.waypoints.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.stellar.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');

//Подключение шрифтов
$asset->addString('<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">');
?>

<!doctype html>
<html lang="en">
<head>
    <!--  Вывод всех файлов, добавленных через api -->
    <?php $APPLICATION->ShowHead(); ?>

    <!-- Вывод заголовка из параметров -->
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body>

<div id="panel">
    <!-- Вывод админ-панели -->
    <?= $APPLICATION->ShowPanel(); ?>
</div>

<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-9 social">
                    <a href="https://github.com/Visma-Dev/TestTask_RusRobots"><span class="fa fa-github"> Project Repository</span></a>
                </div>
                <div class="col-3 search-top">
                    <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                    <form action="#" class="search-top-form">
                        <span class="icon fa fa-search"></span>
                        <input type="text" id="s" placeholder="Type keyword to search...">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button"
                   aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="/">Task from Rus. Robotics</a></h1>
            </div>
        </div>
    </div>

    <!--Подключение компонента верхнего меню -->
    <?php $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "subtop",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
); ?>

</header>