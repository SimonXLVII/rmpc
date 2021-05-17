<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

$id_subcateg = $_GET['id'] ?? 1;
$subcateg = $dataSubcategs->getSubcateg($id_subcateg);
$subcateg_sources = $dataSubcategs->getSubcategSources($id_subcateg);
$allBandsForSubcateg = $dataSubcategs->getAllBandsForSubcateg($id_subcateg);

$categ_for_image = $dataCategs->getCateg($subcateg->categ_id);
$image = $categ_for_image->image;

include $_SERVER['DOCUMENT_ROOT'].'/subcategs/index.view.php';