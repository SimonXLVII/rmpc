<?php

include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

$allSubategs = $dataBands->getAllSubcategsForBands();
include $_SERVER['DOCUMENT_ROOT'].'/bands/new.view.php';