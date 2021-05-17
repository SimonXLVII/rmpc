<?php
include $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
use App\models\Validator;

if (isset($_POST['submit'])) {
    if (Validator::preProcessing($_POST['email']) == "001000101@internet.internet" && Validator::preProcessing($_POST["password"]) == 105) {
        $_SESSION['auth'] = true;
        $_SESSION['email'] = $_POST["email"];
        $_SESSION['auth_exit'] = "Выйти";
        header("Location: /");
    } else {
        $res = "Неправильно введены логин или пароль...";
    }
} else {
    if (isset($_SESSION["auth_exit"]) && $_SESSION["auth_exit"] == "Выйти") {
        $_SESSION["auth"] = false;
        session_destroy();
        header("Location: /");
    }
}

include $_SERVER["DOCUMENT_ROOT"]."/index.php";