<?php
include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";?>

<div class="btns" style="background-image: url('/img/<?= $admin->image?>');">
    <div class="btns_block">
        <a class="adm_btn" href="/index.php">Главная</a>
        <a class="adm_btn" href="/admin/chooseChange.php">Раздел &laquo;Изменение&raquo;</a>
        <a class="adm_btn" href="/admin/chooseInsert.php">Раздел &laquo;Добавление&raquo;</a>
        <a class="adm_btn" href="/admin/chooseDelete.php">Раздел &laquo;Удаление&raquo;</a>
        <a class="adm_btn" href="/admin/chooseSliders.php">Раздел &laquo;Слайдеры&raquo;</a>
        <a class="adm_btn_back  back">Назад</a>
        <a class="adm_btn_exit" href="/masterskaya">Выход</a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>