<?php
include $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";
$admin = $dataAdmin->getAdmin();
$all_categs = $dataAdmin->getAllCategs(); ?>

<div class="btns" style="background-image: url('/img/<?= $admin->image?>');">
    <div class="btns_block">
        <a class="adm_btn" href="/index.php">Главная</a>
        <?php foreach ($all_categs as $one_categ):?>
            <a class="adm_btn" href="/categs/edit.php?id=<?= $one_categ->id?>">Изменить категорию &laquo;<?= $one_categ->name?>&raquo;</a>
        <?php endforeach;?>
        <a class="adm_btn_back  back">Назад</a>
        <a class="adm_btn_exit" href="/masterskaya">Выход</a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>