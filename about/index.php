<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('About me');

?>

<section class="site-section">
    <div class="container">

        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">

                <div class="row">
                    <div class="col-md-12">

                        <!-- Вкл.область Имени -->
                        <h2 class="mb-4">Hi There! I'm
                            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/about_name.php",
                            ]); ?></h2>

                        <p class="mb-5">
                            <!-- Вкл.область Фото -->
                            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/about_photo.php",
                            ]); ?>
                        </p>
                        <!-- Вкл.область Описания -->
                        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "about_descript"
                        ]); ?>
                    </div>
                </div>
            </div>

            <!-- Подключение сайдбара -->
            <?require($_SERVER['DOCUMENT_ROOT'] . '/local/templates/main/sidebar.php');?>



<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
