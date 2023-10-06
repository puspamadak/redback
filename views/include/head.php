<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<base href="<?= BASE_URL ?>" />
<title><?= $config->title ?></title>
<link rel="shortcut icon" href="<?= $config->logo ?>" />
<link rel="icon" href="<?= $config->logo ?>" />
<link rel="apple-touch-icon" href="<?= $config->logo ?>" />
<?php if(!$config->privatePage) { ?>
	<meta itemprop="name" content="<?= SITE['title'] ?>" />
	<meta name="author" content="<?= $config->author ?>" />
	<link rel="canonical" href="<?= $config->url ?>" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:title" content="<?= $config->title ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?= $config->url ?>" />
	<meta property="og:site_name" content="<?= SITE['title'] ?>" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="<?= $config->title ?>" />
	<?php if(isset($config->desc)) { ?>
		<meta name="description" content="<?= $config->desc ?>" />
		<meta property="og:description" content="<?= $config->desc ?>" />
		<meta name="twitter:description" content="<?= $config->desc ?>" />
	<?php } ?>
	<?php if(isset($config->image)) { ?>
		<meta itemprop="image" content="<?= $config->image ?>" />
		<meta property="og:image" content="<?= $config->image ?>" />
		<meta name="twitter:image" content="<?= $config->image ?>" />
	<?php } ?>
	<meta name="twitter:url" content="<?= $config->url ?>" />
<?php } ?>

<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="<?= ASSET['css'] ?>variables.css" />
<link rel="stylesheet" href="<?= ASSET['css'] ?>defaults.css" />
<link rel="stylesheet" href="<?= ASSET['css'] ?>widgets.css" />
<link rel="stylesheet" href="<?= ASSET['css'] ?>button.css" />
<script src="<?= ASSET['js'] ?>icon.js" type="module"></script>