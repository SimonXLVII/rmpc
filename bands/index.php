<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

$id_band = $_GET['id'] ?? 1;
$band = $dataBands->getBand($id_band);
$band_sources = $dataBands->getBandSources($id_band);

include $_SERVER['DOCUMENT_ROOT'].'/bands/index.view.php';