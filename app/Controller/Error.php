<?php
namespace App\Controller;

use App\Controller\Template\Error as ErrorPage;

class Error {
	static function notFound($req, $res) {
		$page = new ErrorPage($req, $res, 404, 'Page Not Found');
		$page->config->title = 'Not Found';
		return $page;
	}
}
?>