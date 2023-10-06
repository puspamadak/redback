<?php
use App\System\Request;
use App\System\Response;
use App\System\RouteGroup;

define('BASE_DIR', __DIR__.'/');
require_once BASE_DIR.'vendor/autoload.php';
require_once BASE_DIR.'config/main.php';

$request = new Request();
$response = new Response();
$router = new RouteGroup(function($router) {
	require_once DIR['route'].'main.php';
});
$router->match($request->url, $request->method);
$router->invoke($request, $response);
?>