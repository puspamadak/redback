<?php
use App\System\Route;
use App\System\RouteGroup;

$router->add(new RouteGroup(function($r) {
	$r->middleware('Renderer::web');
	$r->add(Route::get('', 'Home::index'));
	$r->add(Route::get('contact', 'Home::contact')->name('contact'));
	$r->add(Route::get('user', 'User::index')->name('user.home'));
	$r->add(Route::get('user/workout', 'User::workout')->name('user.workout'));
	$r->add(Route::get('user/history', 'User::history')->name('user.history'));
}));
?>