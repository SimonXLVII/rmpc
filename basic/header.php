<?php 
$id = 1;
$categsForMain = $dataMain->getAllCategsForMain($id);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMPC</title>
    <link rel="stylesheet" href="/css/global.css" type="text/css">
    <link rel="stylesheet" href="/css/header.css" type="text/css">
    <link rel="stylesheet" href="/css/footer.css" type="text/css">
    <link rel="stylesheet" href="/css/blocks.css" type="text/css">
    <link rel="stylesheet" href="/css/prev_blocks.css" type="text/css">
    <link rel="stylesheet" href="/css/slider.css" type="text/css">
    <link rel="stylesheet" href="/css/log.view.css" type="text/css">
    <link rel="stylesheet" href="/css/admin.css" type="text/css">
    <link rel="stylesheet" href="/css/submit_forms.css" type="text/css">
    <link rel="stylesheet" href="/css/tr_dis.css" type="text/css">
</head>
<body>
<header class="tr_dis">
    <div class="title">
        <p>
            <a class="h1" href="/index.php">ROCK, METAL, PUNK 'N' CORE</a>
        </p>
        <?php if ($user):?>
            <p class="href_p">
                <a class="href" href="/admin">Админ-панель</a> /
                <a class="href_exit" href="/masterskaya">Выход</a>
            </p>
        <?php endif;?>
    </div>
    <div class="menu">
        <ul class="menuList">
            <?php foreach ($categsForMain as $categ):?>
                <li><a class="li <?= $categ->name?>" href="/categs/index.php?id=<?= $categ->id?>"><?= $categ->name?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</header>
<article>