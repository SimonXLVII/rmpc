<?php
include $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";
$admin = $dataAdmin->getAdmin();
$allSubcategsForDel = $dataAdmin->getAllSubcategs();?>

<div class="btns" style="background-image: url('/img/<?= $admin->image?>');">
    <div class="btns_block">
        <a class="adm_btn" href="/index.php">Главная</a>
        <?php foreach ($allSubcategsForDel as $subcategForDel):?>
            <a class="adm_btn" href="/subcategs/delete.php?id=<?= $subcategForDel->id?>">Удалить статью о подкатегории &laquo;<?= $subcategForDel->name?>&raquo;</a>
        <?php endforeach;?>
        <a class="adm_btn_back  back">Назад</a>
        <a class="adm_btn_exit" href="/masterskaya">Выход</a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>