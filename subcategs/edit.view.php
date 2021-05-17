<?php include $_SERVER['DOCUMENT_ROOT'].'/basic/header.php'; ?>

<div class="submit_cont">

    <div class="submit_form">

        <p class="alert">
            <?= $_SESSION['errors']['update']?>
        </p>

        <h2 class="submit_header">Изменение подкатегории &laquo;<?= $subcateg->name?>&raquo;</h2>

        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $subcateg->id?>">

            <div>
                <label for="name">Название статьи</label>
                <input type="text" name="name" class="submit_name" value="<?= $subcateg->name?>">
            </div>

            <div>
                <label for="descr_main">Основной текст статьи</label>
                <textarea name="descr_main" class="submit_descr" rows="6"><?= $subcateg->descr_main?></textarea>
            </div>

            <div>
                <label for="descr_add">Дополнительный текст статьи</label>
                <textarea name="descr_add" class="submit_descr" rows="6"><?= $subcateg->descr_add?></textarea>
            </div>
            
            <button type="submit" class="submit_btn" name="submitUpdate">Изменить</button>
            <button name="back" class="sub_btn_back">Назад</button>
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>