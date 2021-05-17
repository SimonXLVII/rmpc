<?php include $_SERVER['DOCUMENT_ROOT'].'/basic/header.php'; ?>

<div class="submit_cont shadow">

    <div class="submit_form">

        <p class="alert">
            <?= $_SESSION['errors']['delete'] ?? ''?>
        </p>

        <h2 class="submit_header">Удаление изображения из слайдера &laquo;<?= $category->name?>&raquo;</h2>

        <form action="deleteSource.php" method="post" enctype="multipart/form-data">

            <div class="edit_select_div">
                <label for="source">Выберите изображение:</label>
                    <select name="source" class="edit_view_select">
                        <?php foreach($allCategSources as $oneSources):?>
                            <option value="<?= $oneSources->id?>"><?= $oneSources->name?></option>
                        <?php endforeach;?>
                    </select>
            </div>
            
            <button type="submit" class="submit_btn" name="submitUpdate">Удалить</button>
            <button name="back" class="sub_btn_back">Назад</button>
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>