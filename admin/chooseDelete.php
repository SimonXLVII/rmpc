<?php
include $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";
$admin = $dataAdmin->getAdmin(); ?>

<div class="btns" style="background-image: url('/img/<?= $admin->image?>');">
    <div class="btns_block">
        <a class="adm_btn" href="/index.php">Главная</a>
        <a class="adm_btn" href="/admin/chooseDeleteSubcategs.php">Удалить статью раздела &laquo;Подкатегория&raquo;</a>
        <a class="adm_btn" href="/admin/chooseDeleteBands.php">Удалить статью раздела &laquo;Группы&raquo;</a>
        <a class="adm_btn_back  back">Назад</a>
        <a class="adm_btn_exit" href="/masterskaya">Выход</a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>