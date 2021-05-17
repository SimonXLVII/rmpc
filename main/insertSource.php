<?php
session_start();
use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    $data['descr'] = Validator::preProcessing($_POST['descr']);

    [$errorLoad, $fileName] = loadImg($minFileSize, $maxFileSize, $validFileTypes, $uploadPath, 'image');

    if (empty($errorLoad)) {
        $data['name'] = $fileName;
        $dataSliderMain->insertMainSource($data);
        header('Location: /admin/chooseInsertInSliders.php');
    } else {
        $_SESSION['errors']['insert'] = $errorLoad;
        header('Location: /main/newSource.php');
    }


} elseif (isset($_POST['back'])) {
    header("Location: /admin");
}