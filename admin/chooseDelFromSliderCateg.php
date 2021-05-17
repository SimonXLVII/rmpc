<?php
include $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";
$admin = $dataAdmin->getAdmin();
$all_categs = $dataAdmin->getAllCategs();
$all_subcategs = $dataAdmin->getAllSubcategs();
$all_bands = $dataAdmin->getAllBands(); ?>

<div class="btns" style="background-image: url('/img/<?= $admin->image?>');">
    <div class="btns_block">
        <a class="adm_btn" href="/index.php">Главная</a>
        <?php foreach ($all_categs as $one_categ):?>
            <a class="adm_btn" href="/categs/delSource.php?id=<?= $one_categ->id?>">Удалить из слайдера &laquo;<?= $one_categ->name?>&raquo;</a>
        <?php endforeach;?>
        <a class="adm_btn_back  back">Назад</a>
        <a class="adm_btn_exit" href="/masterskaya">Выход</a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>