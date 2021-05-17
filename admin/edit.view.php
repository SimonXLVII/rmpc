<?php include $_SERVER['DOCUMENT_ROOT'].'/basic/header.php'; ?>

<div class="submit_cont shadow">

    <div class="submit_form">

        <p class="alert">
            <?= $_SESSION['errors']['update']?>
        </p>

        <h2 class="submit_header">Изменение учётной записи пользователя &laquo;<?= $admin->name?>&raquo;</h2>

        <form action="update.php" method="post" enctype="multipart/form-data">

            <div>
                <label for="name">Логин</label>
                <input type="text" name="name" class="submit_name" value="<?= $admin->name?>">
            </div>

            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" class="submit_name" value="<?= $admin->email?>"></input>
            </div>

            <div>
                <label for="password">Пароль</label>
                <input type="text" name="password" class="submit_name" value="<?= $admin->password?>"></input>
            </div>

            <div>
                <label for="image">Выберите фоновое изображение</label>
                <input type="file" name="image" id="image" class="submit_image">
            </div>
            <img src="/img/<?= $admin->image ?>" alt="" id="loadImage" class="loadingImage">

            <button type="submit" class="submit_btn" name="submitUpdate">Изменить</button>
            <button name="back" class="sub_btn_back">Назад</button>
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php"; ?>
<script src="/js/loadImgToNewView.js"></script>