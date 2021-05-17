<?php
include $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";
$admin = $dataAdmin->getAdmin();
$all_subcategs = $dataAdmin->getAllSubcategs(); ?>

<div class="btns" style="background-image: url('/img/<?= $admin->image?>');">
    <div class="btns_block">
        <a class="adm_btn" href="/index.php">Главная</a>
        <?php foreach ($all_subcategs as $one_subcateg):?>
            <a class="adm_btn" href="/subcategs/edit.php?id=<?= $one_subcateg->id?>">Изменить категорию &laquo;<?= $one_subcateg->name?>&raquo;</a>
        <?php endforeach;?>
        <a class="adm_btn_back  back">Назад</a>
        <a class="adm_btn_exit" href="/masterskaya">Выход</a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>