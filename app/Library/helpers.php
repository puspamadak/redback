<?php
function route($name, ...$args) {
	global $router;
	$path = $router->getByName($name);
	foreach($args as $arg) {
		$path = preg_replace('/\(.*?\)/', $arg, $path, 1);
	}
	return $path;
}

function printTime($t, $m = 'M') {
	return date("d-$m-Y H:i:s", $t - TIME['offset']);
}
?>