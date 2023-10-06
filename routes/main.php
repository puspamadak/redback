<?php
use App\System\Route;

require_once __DIR__.'/web.php';

$router->add(Route::default('Error::notFound')->middleware('Renderer::web'));
?>