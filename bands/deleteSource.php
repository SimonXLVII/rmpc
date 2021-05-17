<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['source'])) {

    $id = $_POST['source'];
    $source = $dataSliderBands->getBandSource($id);

    deleteImg('/img/'.$source->name);
    $dataSliderBands->deleteBandSource($id);

    header('Location: /admin/chooseDelFromSliderBand.php');
}