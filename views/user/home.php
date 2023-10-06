<link rel="stylesheet" href="<?= ASSET['css'] ?>user/content.css" />
<link rel="stylesheet" href="<?= ASSET['css'] ?>user/count.css" />

<main class="col grow">
    <?php include __DIR__.'/workout/stats.php' ?>
</main>
<a class="btn green action" href="<?= route('user.workout') ?>">Start</a>