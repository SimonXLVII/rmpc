<?php include $_SERVER['DOCUMENT_ROOT'].'/basic/header.php'; ?>

<div class="submit_cont">

    <div class="submit_form">

        <p class="alert">
            <?= $_SESSION['msg'] ?? ''?>
        </p>

        <h2 class="submit_header">Добавление статьи раздела &laquo;Подкатегории&raquo;</h2>

        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Название статьи</label>
                <input type="text" name="name" class="submit_name">
            </div>

            <div>
                <label for="descr_main">Основной текст статьи</label>
                <textarea name="descr_main" class="submit_descr" rows="6"></textarea>
            </div>

            <div>
                <label for="descr_add">Дополнительный текст статьи</label>
                <textarea name="descr_add" class="submit_descr" rows="6"></textarea>
            </div>

            <div class="edit_select_div">
                <label for="categ_id">Относится к категории:</label>
                    <select name="categ_id" class="edit_view_select">
                        <?php foreach($allCategs as $oneCateg):?>
                            <option value="<?= $oneCateg->id?>"><?= $oneCateg->name?></option>
                        <?php endforeach;?>
                    </select>
            </div>
            
            <button type="submit" class="submit_btn" name="submitUpdate">Добавить</button>
            <button name="back" class="sub_btn_back">Назад</button>
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>