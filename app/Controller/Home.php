<?php
namespace App\Controller;

use App\Controller\Template\Home as HomePage;
use App\Library\Web\Config;
use App\System\View;

class Home {
	static function index($req) {
		$config = new Config($req);
		$page = View::create('home/index')->data(compact('config'));
		return $page;
	}

	static function contact($req) {
		$page = View::create('contact');
		return new HomePage($req, $page, 'Contact Us', null, 'javascript:history.back()');
	}
}
?>