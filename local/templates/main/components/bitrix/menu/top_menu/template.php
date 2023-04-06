<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)): ?>
    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                    <?php foreach ($arResult as $item): ?>

                    <?php if($item["SELECTED"]): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                        </li>
                    <?php endif;?>

                    <?php endforeach; ?>
                </ul>

            </div>
        </div
    </nav>
<?php endif?>


<!--<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
    <div class="dropdown-menu" aria-labelledby="dropdown05">
        <a class="dropdown-item" href="category.html">Lifestyle</a>
        <a class="dropdown-item" href="category.html">Food</a>
        <a class="dropdown-item" href="category.html">Adventure</a>
        <a class="dropdown-item" href="category.html">Travel</a>
        <a class="dropdown-item" href="category.html">Business</a>
    </div>
</li>-->
