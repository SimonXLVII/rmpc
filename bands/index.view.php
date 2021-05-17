<?php include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";?>

<div class="bg_band" style="background-image: url('/img/<?= $band->image?>');">
    <div class="text_block">
        <?php if ($band): ?>
            <h2><?= $band->name ?></h2>
            <p><?= $band->descr_main ?></p>
            <div class="wrapper">
                <div class="slider">
                    <?php foreach ($band_sources as $band_source):?>
                        <img src="/img/<?= $band_source->name?>" alt="<?= $band_source->descr?>" class="slide">
                    <?php endforeach;?>
                </div>
            </div>
            <figcaption class="slide_descr"></figcaption>
            <p><?= $band->descr_add ?></p>
            <div class="subs">
                <div class="div_back">
                    <a class="btn_back back">Назад</a>
                </div>
            </div>
        <?php endif;?>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/basic/footer.php";?>