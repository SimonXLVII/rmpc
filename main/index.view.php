<?php include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";?>

<div class="bg" style="background-image: url(/img/<?= $main->image?>);">
    <div class="text_block">
        <?php if ($main): ?>
            <h2><?= $main->name ?></h2>
            <p><?= $main->descr_main ?></p>
            <div class="wrapper">
                <div class="slider">
                    <?php foreach ($main_sources as $main_source):?>
                        <img src="/img/<?= $main_source->name?>" alt="<?= $main_source->descr?>" class="slide">
                    <?php endforeach;?>
                </div>
            </div>
            <figcaption class="slide_descr"></figcaption>
            <p><?= $main->descr_add ?></p>
            <hr/>
            <div class="subs">
                <?php foreach($allCategsForMain as $categForMain):?>
                    <div class="prev_text_block">
                        <figcaption class="prev_descr">
                            <a class="prev_descr main_categs" href="/categs/index.php?id=<?= $categForMain->id?>"><?= $categForMain->name?></a>
                        </figcaption>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php";?>