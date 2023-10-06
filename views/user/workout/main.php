<link rel="stylesheet" href="<?= ASSET['css'] ?>user/content.css" />
<link rel="stylesheet" href="<?= ASSET['css'] ?>user/count.css" />
<script src="<?= ASSET['js'] ?>field/select.js" type="module"></script>
<script src="<?= ASSET['js'] ?>user/slider.js" defer></script>

<main class="col grow">
    <div class="slides no-scrollbar">
        <?php include __DIR__.'/stats.php' ?>
        <?php include __DIR__.'/compare.php' ?>
        <?php include __DIR__.'/map.php' ?>
    </div>
    <nav class="dots"></nav>
</main>
<a class="btn red action" href="<?= route('user.home') ?>">Finish</a>