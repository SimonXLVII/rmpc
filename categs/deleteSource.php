<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['source'])) {

    $id = $_POST['source'];
    $source = $dataSliderCategs->getCategSource($id);

    deleteImg('/img/'.$source->name);
    $dataSliderCategs->deleteCategSource($id);

    header('Location: /admin/chooseDelFromSliderCateg.php');
}