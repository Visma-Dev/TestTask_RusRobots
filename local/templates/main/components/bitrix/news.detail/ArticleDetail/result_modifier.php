<?php

//Вывод ссылок на загруженные файлы
if ( !empty($arResult['PROPERTIES']['GALLERY']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $key => $photoId) {
        $arPhoto = CFile::GetFileArray($photoId);
        $arResult['PROPERTIES']['PHOTOS']['key']['src'] = $arPhoto['SRC'];
    }
}

//Вывод названия и ссылки на основную директорию
$res = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID']);
$ar_res = $res->GetNext();
$arResult['IBLOCK_NAME'] = $ar_res['NAME'];
$arResult['IBLOCK_SRC'] = $ar_res['SRC'];