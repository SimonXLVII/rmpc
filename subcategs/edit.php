<?php

include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

$id = $_GET['id'] ?? 1;
$subcateg = $dataSubcategs->getSubcateg($id);

include $_SERVER['DOCUMENT_ROOT'].'/subcategs/edit.view.php';