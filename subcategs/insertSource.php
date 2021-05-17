<?php
session_start();
use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    $data['descr'] = Validator::preProcessing($_POST['descr']);
    $data['subcateg_id'] = $_POST['subcateg_id'];

    [$errorLoad, $fileName] = loadImg($minFileSize, $maxFileSize, $validFileTypes, $uploadPath, 'image');

    if (empty($errorLoad)) {
        $data['name'] = $fileName;
        $dataSliderSubcategs->insertSubcategSource($data);
        header('Location: /admin/chooseInsertInSliderSubcateg.php');
    } else {
        $_SESSION['errors']['insert'] = $errorLoad;
        header('Location: /subcategs/newSource.php');
    }


} elseif (isset($_POST['back'])) {
    header("Location: /admin");
}