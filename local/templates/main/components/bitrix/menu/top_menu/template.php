<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<?php if (!empty($arResult)): ?>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">

                    <?php foreach ($arResult as $item): ?>

                    <?php if (empty($item['subitems'])):?>
                        <li class="nav-item">
                            <a class="nav-link <?= ($item["SELECTED"]) ? 'active' : ''?>"
                               href="<?= $item['LINK'] ?>"> <?= $item['TEXT'] ?></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= ($item["SELECTED"]) ? 'active' : ''?>"
                               href="<?= $item['LINK'] ?>" id="dropdown05" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"><?= $item['TEXT'] ?></a>

                            <div class="dropdown-menu" aria-labelledby="dropdown05">
                                <?php foreach ($item['subitems'] as $subitem): ?>
                                <a class="dropdown-item" href="<?= $subitem['LINK']?>"><?= $subitem['NAME'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    <?php endif ?>

                    <?php endforeach; ?>
                </ul>

            </div>
        </div
    </nav>
<?php endif?>


