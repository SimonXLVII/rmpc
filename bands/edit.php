<?php

include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

$id = $_GET['id'] ?? 1;
$band = $dataBands->getBand($id);

include $_SERVER['DOCUMENT_ROOT'].'/bands/edit.view.php';