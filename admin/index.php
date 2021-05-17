<?php
include $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
if ($user == false) { header("Location: /");}

$admin = $dataAdmin->getAdmin();

include $_SERVER['DOCUMENT_ROOT']."/admin/index.view.php"; ?>