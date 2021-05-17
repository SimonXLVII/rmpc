<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

$id = $_GET['id'] ?? 1;
$subcategory = $dataSubcategs->getSubcateg($id);

include $_SERVER['DOCUMENT_ROOT'].'/subcategs/newSource.view.php';