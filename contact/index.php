<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Contact');

//Подключение компонента формы
$APPLICATION->IncludeComponent(
    "visma:main.feedback",
    "ContactForm",
    [
        "COMPONENT_TEMPLATE" => ".default",
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "EMAIL_TO" => "visma-dev@mail.ru",
        "AJAX_MODE" => "Y",
        "REQUIRED_FIELDS" => [
            0 => "NAME",
            1 => "EMAIL",
            2 => "PHONE"
        ],
        "EVENT_MESSAGE_ID" => [
            0 => "7",
        ]
    ],
    false
);


//Подключение сайдбара
require($_SERVER['DOCUMENT_ROOT'] . '/local/templates/main/sidebar.php');


require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
