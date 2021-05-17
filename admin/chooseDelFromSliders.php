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
        <a class="adm_btn" href="/main/delSource.php">Удалить из слайдера &laquo;Main&raquo;</a>
            <a class="adm_btn" href="/admin/chooseDelFromSliderCateg.php">Удалить изображение из слайдера раздела &laquo;Катеории&raquo;</a>
            <a class="adm_btn" href="/admin/chooseDelFromSliderSubcateg.php">Удалить изображение из слайдера раздела &laquo;Подкатегории&raquo;</a>
            <a class="adm_btn" href="/admin/chooseDelFromSliderBand.php">Удалить изображение из слайдера раздела &laquo;Группы&raquo;</a>
        <a class="adm_btn_back  back">Назад</a>
        <a class="adm_btn_exit" href="/masterskaya">Выход</a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>