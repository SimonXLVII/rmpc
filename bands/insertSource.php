<?php
session_start();
use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    $data['descr'] = Validator::preProcessing($_POST['descr']);
    $data['band_id'] = $_POST['band_id'];

    [$errorLoad, $fileName] = loadImg($minFileSize, $maxFileSize, $validFileTypes, $uploadPath, 'image');

    if (empty($errorLoad)) {
        $data['name'] = $fileName;
        $dataSliderBands->insertBandSource($data);
        header('Location: /admin/chooseInsertInSliderBand.php');
    } else {
        $_SESSION['errors']['insert'] = $errorLoad;
        header('Location: /bands/newSource.php');
    }


} elseif (isset($_POST['back'])) {
    header("Location: /admin");
}