<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
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
$asset->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.2.1.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/jquery-migrate-3.0.0.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/popper.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.waypoints.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.stellar.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/main.js');

//Подключение шрифтов
$asset->addString('<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">');
?>

<!doctype html>
<html lang="en">
<head>
    <!--  Вывод всех файлов, добавленных через api -->
    <?=$APPLICATION->ShowHead();?>

    <!-- Вывод заголовка из параметров -->
    <title><?=$APPLICATION->ShowTitle();?></title>
</head>
<body>

<div id="panel">
    <!-- Вывод админ-панели -->
    <?=$APPLICATION->ShowPanel();?>
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
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="/">Task from Rus. Robotics</a></h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                            <a class="dropdown-item" href="category.html">Lifestyle</a>
                            <a class="dropdown-item" href="category.html">Food</a>
                            <a class="dropdown-item" href="category.html">Adventure</a>
                            <a class="dropdown-item" href="category.html">Travel</a>
                            <a class="dropdown-item" href="category.html">Business</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>

            </div>
        </div
    </nav>

</header>