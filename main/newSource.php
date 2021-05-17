<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if ($user == false) { header("Location: /");}

include $_SERVER['DOCUMENT_ROOT'].'/main/newSource.view.php';