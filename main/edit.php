<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

$main = $dataMain->getMain();
$allMainSources = $dataMain->getMainSources();

include $_SERVER['DOCUMENT_ROOT'].'/main/edit.view.php';