<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');


//Вывод слайдера

//фильтрация - проверяем состояние чекбокса
global $SliderFilter;
$SliderFilter = ['PROPERTY_SLIDER' => 'Y'];

$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "top_slider",
    [
        "ACTIVE_DATE_FORMAT" => "f j, Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "N",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "categories/#SECTION_CODE#/#ELEMENT_CODE#/",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => [
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "PREVIEW_PICTURE",
            3 => "DETAIL_TEXT",
            4 => "",
        ],
        "FILTER_NAME" => "SliderFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => getIdByCode("articles"),
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "5",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => [
            0 => "",
            1 => "",
        ],
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "top_slider",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager"
    ],
    false
);


//Вывод раздела статей

$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "HomeElementsList",
    [
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "categories/#SECTION_CODE#/#ELEMENT_CODE#/",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => getIdByCode('articles'),// Функция для вывода id и-блока по символьному коду.,
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "1",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("", ""),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    ]
);


require($_SERVER['DOCUMENT_ROOT'] . '/local/templates/main/sidebar.php');

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');