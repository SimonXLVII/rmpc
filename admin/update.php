<?php
session_start();

use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['submitUpdate'])) {
    unset($_SESSION['errors']);

    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['email'] = Validator::preProcessing($_POST['email']);
    $data['password'] = Validator::preProcessing($_POST['password']);

    $admin = $dataAdmin->getAdmin();
    [$errorLoad, $fileName] = loadImg($minFileSize, $maxFileSize, $validFileTypes, $uploadPath, 'image');

    if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
        $fileName = $admin->image;
        $errorLoad = "Не удалось загрузить файл...";
    } else {
        deleteImg('/img/'.$admin->image);
    }

    if (empty($errorLoad)) {
        $data['image'] = $fileName;
        $dataAdmin->updateAdmin($data);
        header('Location: /index.php');
    } else {
        $_SESSION['errors']['update'] = $errorLoad;
        header('Location: /admin/edit.php');
    }
} elseif (isset($_POST['back'])) {
    header("Location: /admin");
}