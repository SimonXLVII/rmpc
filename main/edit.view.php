<?php include $_SERVER['DOCUMENT_ROOT'].'/basic/header.php'; ?>

<div class="submit_cont">

    <div class="submit_form">

        <p class="alert">
            <?= $_SESSION['errors']['update']?>
        </p>

        <h2 class="submit_header">Изменение главной страницы</h2>

        <form action="update.php" method="post" enctype="multipart/form-data">

            <div>
                <label for="name">Название статьи</label>
                <input type="text" name="name" class="submit_name" value="<?= $main->name?>">
            </div>

            <div>
                <label for="descr_main">Основной текст статьи</label>
                <textarea name="descr_main" class="submit_descr" rows="5"><?= $main->descr_main?></textarea>
            </div>

            <div>
                <label for="descr_add">Дополнительный текст статьи</label>
                <textarea name="descr_add" class="submit_descr" rows="5"><?= $main->descr_add?></textarea>
            </div>

            <div>
                <label for="image">Выберите фоновое изображение</label>
                <input type="file" name="image" id="image" class="submit_image">
            </div>
            <img src="/img/<?= $main->image ?>" alt="" id="loadImage" class="loadingImage">

            <button type="submit" class="submit_btn" name="submitUpdate">Изменить</button>
            <button name="back" class="sub_btn_back">Назад</button>
        </form>
    </div>
</div>

<script src="/js/loadImgToNewView.js"></script>
<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>