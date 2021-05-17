<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

$id_categ = $_GET['id'];
$category = $dataCategs->getCateg($id_categ);
$categ_sources = $dataCategs->getCategSources($id_categ);
$allSubcategsForCateg = $dataCategs->getAllSubcategsForCateg($id_categ);

include $_SERVER['DOCUMENT_ROOT'].'/categs/index.view.php';