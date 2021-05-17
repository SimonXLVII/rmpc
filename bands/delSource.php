<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

$id = $_GET['id'] ?? 1;
$band = $dataBands->getBand($id);
$allBandSources = $dataSliderBands->getBandSources($id);

include $_SERVER['DOCUMENT_ROOT'].'/bands/delSource.view.php';