<?php
include $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";
$admin = $dataAdmin->getAdmin(); ?>

<div class="btns" style="background-image: url('/img/<?= $admin->image?>');">
    <div class="btns_block">
        <a class="adm_btn" href="/index.php">Главная</a>
        <a class="adm_btn" href="/main/edit.php">Изменить раздел &laquo;Главная&raquo;</a>
        <a class="adm_btn" href="/admin/chooseChangeCategs.php">Изменить раздел &laquo;Категории&raquo;</a>
        <a class="adm_btn" href="/admin/chooseChangeSubcategs.php">Изменить раздел &laquo;Подкатегории&raquo;</a>
        <a class="adm_btn" href="/admin/chooseChangeBands.php">Изменить раздел &laquo;Группы&raquo;</a>
        <a class="adm_btn" href="/admin/edit.php">Изменить раздел &laquo;Админ&raquo;</a>
        <a class="adm_btn_back  back">Назад</a>
        <a class="adm_btn_exit" href="/masterskaya">Выход</a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>