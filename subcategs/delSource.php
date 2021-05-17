<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

$id = $_GET['id'] ?? 1;
$subcategory = $dataSubcategs->getSubcateg($id);
$allSubcategSources = $dataSliderSubategs->getSubcategSources($id);

include $_SERVER['DOCUMENT_ROOT'].'/subcategs/delSource.view.php';