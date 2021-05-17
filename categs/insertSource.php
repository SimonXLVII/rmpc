<?php
session_start();
use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    $data['descr'] = Validator::preProcessing($_POST['descr']);
    $data['categ_id'] = $_POST['categ_id'];

    [$errorLoad, $fileName] = loadImg($minFileSize, $maxFileSize, $validFileTypes, $uploadPath, 'image');

    if (empty($errorLoad)) {
        $data['name'] = $fileName;
        $dataSliderCategs->insertCategSource($data);
        header('Location: /admin/chooseInsertInSliderCateg.php');
    } else {
        $_SESSION['errors']['insert'] = $errorLoad;
        header('Location: /categs/newSource.php');
    }


} elseif (isset($_POST['back'])) {
    header("Location: /admin");
}