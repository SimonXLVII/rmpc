<?php include $_SERVER['DOCUMENT_ROOT']."/basic/header.php";?>

<div class="bg" style="background-image: url('/img/<?= $category->image?>');">
    <div class="text_block">
        <?php if ($category): ?>
            <h2><?= $category->name ?></h2>
            <p><?= $category->descr_main ?></p>
            <div class="wrapper">
                <div class="slider">
                    <?php foreach ($categ_sources as $categ_source):?>
                        <img src="/img/<?= $categ_source->name?>" alt="<?= $categ_source->descr?>" class="slide">
                    <?php endforeach;?>
                </div>
            </div>
            <figcaption class="slide_descr"></figcaption>
            <p><?= $category->descr_add ?></p>
            <hr/>
            <div class="subs">
                <?php foreach($allSubcategsForCateg as $subcategForCateg):?>
                    <div class="prev_text_block">
                        <figcaption class="prev_descr">
                            <a class="prev_descr" href="/subcategs/index.php?id=<?= $subcategForCateg->id?>"><?= $subcategForCateg->name?></a>
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