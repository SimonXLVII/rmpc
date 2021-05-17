<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if ($user == false) { header("Location: /");}

$id = $_GET['id'];
$category = $dataCategs->getCateg($id);

include $_SERVER['DOCUMENT_ROOT'].'/categs/edit.view.php';