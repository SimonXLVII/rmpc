<?php

include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

$allCategs = $dataSubcategs->getAllCategsForSubcategs();
include $_SERVER['DOCUMENT_ROOT'].'/subcategs/new.view.php';