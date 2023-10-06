<?php
namespace App\Controller;

use App\Controller\Template\User as UserPage;
use App\Controller\Template\Home as HomePage;
use App\System\View;

class User {
	static function index($req) {
		$page = View::create('user/home');
		return new UserPage($req, $page, 'Home', 'Hi Alex');
	}

	static function workout($req) {
		$page = View::create('user/workout/main');
		return new UserPage($req, $page, 'Workout');
	}

	static function history($req) {
		$page = View::create('user/history');
		return new HomePage($req, $page, 'History');
	}
}
?>