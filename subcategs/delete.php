<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $subcateg = $dataSubcategs->getSubcateg($id);
    $dataSubcategs->deleteSubcateg($id);

    header('Location: /index.php');
}