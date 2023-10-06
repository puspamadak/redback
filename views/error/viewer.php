<!DOCTYPE html>
<html lang="<?= $config->language ?>">

<head>
	<?php include DIR['view'].'include/head.php' ?>
</head>

<body class="col aic jcc">
	<h1>Name: <?= get_class($exception) ?></h1>
	<h2>Message: <?= $exception->getMessage() ?></h2>
	<div><b>File: </b><?= $exception->getFile() ?></div>
	<div><b>Line: </b><?= $exception->getLine() ?></div>
	<?php foreach($exception->getTrace() as $t) { ?>
		<div style="border:1px solid green"><?php print_r($t) ?></div>
	<?php } ?>
</body>

</html>