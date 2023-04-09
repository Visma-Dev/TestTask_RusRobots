<?php

use Bitrix\Main\Localization\Loc;

if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<section class="site-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <h1>Contact</h1>
            </div>
        </div>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">

                <?php if (!empty($arResult["ERROR_MESSAGE"])): ?>
                    <?php foreach ($arResult["ERROR_MESSAGE"] as $error): ?>
                        <span class="text-danger"><?= $error; ?></span><br>
                    <?php endforeach; ?>
                <?php elseif (!empty($arResult["OK_MESSAGE"])): ?>
                    <span class="text-success"><?=$arResult["OK_MESSAGE"]?></span><br>
                <?php endif; ?>

                <form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
                    <?= bitrix_sessid_post() ?>

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="name">Name</label>
                            <input name="user_name" type="text" id="name" class="form-control " value="<?= $arResult['AUTHOR_NAME'] ?>" placeholder="<?= Loc::getMessage('MFT_NAME') ?><?= (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])) ? '*' : ''; ?>"/>
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="phone">Phone</label>
                            <input name="user_phone" type="text" id="phone" class="form-control " value="<?= $arResult['AUTHOR_PHONE'] ?>" placeholder="<?= Loc::getMessage('MFT_PHONE')?><?= (empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])) ? '*' : ''; ?>"/>
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="email">Email</label>
                            <input name="user_email" type="email" id="email" class="form-control " value="<?= $arResult['AUTHOR_EMAIL']?>" placeholder="<?= Loc::getMessage('MFT_EMAIL') ?><?= (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])) ? '*' : ''; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Write Message</label>
                            <textarea name="MESSAGE" id="message" class="form-control " cols="30" rows="8" placeholder="<?= Loc::getMessage('MFT_MESSAGE') ?><?= (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])) ? '*' : ''; ?>"><?=$arResult["MESSAGE"]?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="submit" type="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary">
                        </div>
                    </div>
                    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                </form>




