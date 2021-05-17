<?php include $_SERVER['DOCUMENT_ROOT'].'/basic/header.php'; ?>

<div class="submit_cont">

    <div class="submit_form">

        <p class="alert">
            <?= $_SESSION['errors']['insert'] ?? ''?>
        </p>

        <h2 class="submit_header">Добавление изображения в слайдер &laquo;<?= $band->name?>&raquo;</h2>

        <form action="insertSource.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="band_id" value="<?= $band->id?>">

            <div>
                <label for="image">Выберите изображение</label>
                <input type="file" name="image" id="image" class="submit_image">
            </div>

            <div>
                <label for="descr">Описание изображения</label>
                <textarea name="descr" class="submit_descr" rows="6"></textarea>
            </div>
            
            <button type="submit" class="submit_btn" name="submitUpdate">Добавить</button>
            <button name="back" class="sub_btn_back">Назад</button>
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>