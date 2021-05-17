<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if ($user) {
    session_unset();
    session_destroy();
    session_start();
    $user = false;
    header("Location: /");
}

$admin_image = $dataAdmin->getAdmin();
$image = $admin_image->image;
$allCategsForMain = $dataMain->getAllCategsForMain();

include $_SERVER['DOCUMENT_ROOT'].'/masterskaya/auth.view.php';