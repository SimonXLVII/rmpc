<?php
session_start();

use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['submitUpdate'])) {
    unset($_SESSION['errors']);

    $data['id'] = $_POST['id'];
    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['descr_main'] = Validator::preProcessing($_POST['descr_main']);
    $data['descr_add'] = Validator::preProcessing($_POST['descr_add']);

    $subcateg = $dataSubcategs->getSubcateg($id);

    if (empty($errorLoad)) {
        $dataSubcategs->updateSubcateg($data);
        header('Location: /index.php');
    } else {
        $_SESSION['errors']['update'] = $errorLoad;
        header('Location: /subcateg/edit.php');
    }
} elseif (isset($_POST['back'])) {
    header("Location: /admin");
}