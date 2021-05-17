<?php include $_SERVER['DOCUMENT_ROOT'].'/basic/header.php'; ?>

<div class="log_view_cont" style="background-image: url('/img/<?= $image?>')">
    <div class="log_view_block">
        <div class="log_form">
            <h2 class="log_view_header">Авторизация</h2>
            <form action="login.php" method="post">
                <div>
                    <label for="name">Логин</label>
                    <input type="text" name="name" id="name" class="log_view_name" value="<?= $_SESSION['name']?>">
                </div>
                <div>
                    <label for="email">Почта</label>
                    <input type="email" name="email" id="email" class="log_view_email" value="<?= $_SESSION['email'] ?? ''?>">
                    <p class="error" style="display: <?=$_SESSION['errors']['email'] ? 'block' : 'none'?>">
                        <?= $_SESSION['errors']['email'] ?>
                    </p>
                </div>
                <div>
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" class="log_view_password" value="<?= $_SESSION['password'] ?? ''?>">
                    <p class="error" style="display: <?=$_SESSION['errors']['password'] ? 'block' : 'none'?>">
                        <?= $_SESSION['errors']['password'] ?>
                    </p>
                </div>
                <button type="submit" name="submit" class="log_view_btn">Авторизоваться</button>
            </form>
        </div>
        <p class="error" style="display: <?= $_SESSION['errors']['auth'] ? 'inline' : 'none'?>">
            <?= $_SESSION['errors']['auth']?>
        </p>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/basic/footer.php'; ?>