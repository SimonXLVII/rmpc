<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['source'])) {

    $id = $_POST['source'];
    $source = $dataSliderMain->getMainSource($id);

    deleteImg('/img/'.$source->name);
    $dataSliderMain->deleteMainSource($id);

    header('Location: /admin/chooseDelFromSliders.php');
}