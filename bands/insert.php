<?php
session_start();
use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['descr_main'] = Validator::preProcessing($_POST['descr_main']);
    $data['descr_add'] = Validator::preProcessing($_POST['descr_add']);
    $data['band_id'] = Validator::preProcessing($_POST['band_id']);
    $data['subcateg_id'] = Validator::preProcessing($_POST['subcateg_id']);

    [$errorLoad, $fileName] = loadImg($minFileSize, $maxFileSize, $validFileTypes, $uploadPath, 'image');

    if (empty($errorLoad)) {
        $data['image'] = $fileName;
        $dataBands->insertBand($data);
        header('Location: /index.php');
    } else {
        $_SESSION['errors']['insert'] = $errorLoad;
        header('Location: /bands/new.php');
    }


} elseif (isset($_POST['back'])) {
    header("Location: /admin");
}