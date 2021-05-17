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

    $band = $dataBands->getBand($id);
    [$errorLoad, $fileName] = loadImg($minFileSize, $maxFileSize, $validFileTypes, $uploadPath, 'image');

    if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
        $fileName = $band->image;
        $errorLoad = "Не удалось загрузить файл...";
    } else {
        deleteImg('/img/'.$band->image);
    }

    if (empty($errorLoad)) {
        $data['image'] = $fileName;
        $dataBands->updateBand($data);
        header('Location: /index.php');
    } else {
        $_SESSION['errors']['update'] = $errorLoad;
        header('Location: /bands/edit.php');
    }
} elseif (isset($_POST['back'])) {
    header("Location: /admin");
}