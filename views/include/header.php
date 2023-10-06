<link rel="stylesheet" href="<?= ASSET['css'] ?>main/header.css" />

<header>
    <div class="row aic">
        <?php if($parent !== null) { ?>
            <a href="<?= $parent ?>" class="back-btn"><i-con file="angle"></i-con> Back</a>
        <?php } ?>
    </div>
    <h1><?= $title ?></h1>
</header>