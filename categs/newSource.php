<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

$id = $_GET['id'] ?? 1;
$category = $dataCategs->getCateg($id);

include $_SERVER['DOCUMENT_ROOT'].'/categs/newSource.view.php';