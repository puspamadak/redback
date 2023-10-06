<!DOCTYPE html>
<html lang="<?= $config->language ?>">

<head>
	<?php include DIR['view'].'include/head.php' ?>
    <link rel="stylesheet" href="<?= ASSET['css'] ?>error/generic.css?v=1">
</head>

<body class="col aic jcc">
	<h1><?= $code ?></h1>
	<h2><?= $message ?></h2>
	<nav class="row wrap">
		<a href="javascript:history.back()">Go back</a>
		<a href="">Go to home</a>
	</nav>
</body>

</html>