<?php
session_start();
use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['descr_main'] = Validator::preProcessing($_POST['descr_main']);
    $data['descr_add'] = Validator::preProcessing($_POST['descr_add']);
    $data['categ_id'] = Validator::preProcessing($_POST['categ_id']);

    $dataSubcategs->insertSubcateg($data);
    header('Location: /index.php');

} elseif (isset($_POST['back'])) {
    header("Location: /admin");
}