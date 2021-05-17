<?php

const CONN = [
    "host" => "localhost",
    "dbname" => "f0537730_rmpc",
    "login" => "f0537730_rmpc",
    "password" => "1777",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]
];

$minFileSize = 1024;
$maxFileSize = 5*1024*1024;
$validFileTypes = ["image/jpg", "image/jpeg", "image/png"];
$uploadPath = $_SERVER['DOCUMENT_ROOT'].'/img/';