<?php include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";?>

<div class="bg" style="background-image: url('/img/<?= $image?>');">
    <div class="text_block">
        <?php if ($subcateg): ?>
            <h2><?= $subcateg->name ?></h2>
            <p><?= $subcateg->descr_main ?></p>
            <div class="wrapper">
                <div class="slider">
                    <?php foreach ($subcateg_sources as $subcateg_source):?>
                        <img src="/img/<?= $subcateg_source->name?>" alt="<?= $subcateg_source->descr?>" class="slide">
                    <?php endforeach;?>
                </div>
            </div>
            <figcaption class="slide_descr"></figcaption>
            <p><?= $subcateg->descr_add ?></p>
            <hr/>
            <div class="subs">
                <?php foreach($allBandsForSubcateg as $bandForSubcateg):?>
                <div class="prev_text_block">
                        <figcaption class="prev_descr">
                            <a class="prev_descr" href="/bands/index.php?id=<?= $bandForSubcateg->id?>"><?= $bandForSubcateg->name?></a>
                        </figcaption>
                    </div>
                <?php endforeach;?>
                <div class="div_back">
                    <a class="btn_back back">Назад</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php";?>