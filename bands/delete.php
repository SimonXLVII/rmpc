<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $band = $dataBands->getBand($id);

    deleteImg('/img/'.$band->image);
    $dataBands->deleteBand($id);

    header('Location: /index.php');
}