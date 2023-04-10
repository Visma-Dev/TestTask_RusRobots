<?php

global $APPLICATION;

$sections = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    [
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "DEPTH_LEVEL" => "1",
        "DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "content",
        "ID" => $_REQUEST["ID"],
        "IS_SEF" => "Y",
        "SECTION_PAGE_URL" => "#SECTION_CODE#/",
        "SECTION_URL" => "",
        "SEF_BASE_URL" => "/categories/"
    ]
);

$menuLinks = array_merge($sections, $menuLinks);