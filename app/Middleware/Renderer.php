<?php
namespace App\Middleware;

use App\System\View;

class Renderer {
	static function web($req, $res, $cb) {
		$res->contentType = 'text/html';
		$page = call_user_func($cb);
		if($page instanceof View) $res->body = $page->render();
		$res->send();
	}
}
?>