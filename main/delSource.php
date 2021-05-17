<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

$allMainSources = $dataSliderMain->getMainSources();

include $_SERVER['DOCUMENT_ROOT'].'/main/delSource.view.php';