<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['source'])) {

    $id = $_POST['source'];
    $source = $dataSliderSubcategs->getSubcategSource($id);

    deleteImg('/img/'.$source->name);
    $dataSliderSubcategs->deleteSubcategSource($id);

    header('Location: /admin/chooseDelFromSliderSubcateg.php');
}