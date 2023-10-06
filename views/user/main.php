<!DOCTYPE html>
<html lang="<?= $config->language ?>">

<head>
	<?php include DIR['view'].'include/head.php' ?>
	<link rel="stylesheet" href="<?= ASSET['css'] ?>main/main.css" />
</head>

<body class="col content">
	<div class="container col grow">
		<?php include __DIR__.'/include/header.php' ?>
		<?= $this->loadSubView() ?>
		<?php include DIR['view'].'include/navbar.php' ?>
	</div>
</body>

</html>