<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

$main = $dataMain->getMain();
$main_sources = $dataMain->getMainSources();
$allCategsForMain = $dataMain->getAllCategsForMain();

include $_SERVER['DOCUMENT_ROOT'].'/main/index.view.php';