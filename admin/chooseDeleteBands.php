<?php
include $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";
$admin = $dataAdmin->getAdmin();
$allBandsForDel = $dataAdmin->getAllBands();?>

<div class="btns" style="background-image: url('/img/<?= $admin->image?>');">
    <div class="btns_block">
        <a class="adm_btn" href="/index.php">Главная</a>
            <?php foreach ($allBandsForDel as $bandForDel):?>
                <a class="adm_btn" href="/bands/delete.php?id=<?= $bandForDel->id?>">Удалить статью о группе &laquo;<?= $bandForDel->name?>&raquo;</a>
            <?php endforeach;?>
        <a class="adm_btn_back  back">Назад</a>
        <a class="adm_btn_exit" href="/masterskaya">Выход</a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>