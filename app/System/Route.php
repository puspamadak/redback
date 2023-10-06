<?php
namespace App\System;

class Route {
	protected bool $matched = false;
	protected $_name = null;
	protected $params = [];
	protected $path, $methods, $_cb, $_mw = [];

	function __construct(string $path, $callback, array $methods = ['ANY']) {
		$this->path = $path;
		if(is_string($callback)) $callback = 'App\Controller\\'.$callback;
		$this->_cb = $callback;
		$this->methods = $methods;
	}

	function middleware($callback) {
		if(is_string($callback)) $callback = 'App\Middleware\\'.$callback;
		$this->_mw[] = $callback;
		return $this;
	}

	function name(string $name) {
		$this->_name = $name;
		return $this;
	}

	function method(string $method) {
		$this->methods[] = $method;
		return $this;
	}

	//Shortcut functions
	static function get(string $path, $callback) {
		return new static($path, $callback, ['GET', 'HEAD']);
	}

	static function post(string $path, $callback) {
		return new static($path, $callback, ['POST']);
	}

	static function put(string $path, $callback) {
		return new static($path, $callback, ['PUT']);
	}

	static function patch(string $path, $callback) {
		return new static($path, $callback, ['PATCH']);
	}

	static function delete(string $path, $callback) {
		return new static($path, $callback, ['DELETE']);
	}

	static function default($callback) {
		return new static('.*', $callback);
	}

	function match(string $uri, string $method) {
		if($this->methods[0] != 'ANY' && !in_array($method, $this->methods)) return false;
		$regex = '/^'.str_replace('/', '\/', $this->path).'$/';
		$this->matched = preg_match($regex, $uri, $this->params, PREG_OFFSET_CAPTURE);
		return $this->matched;
	}

	function invoke(Request $req, Response $res, ...$args) {
		if(!$this->matched) return;
		$this->pushPage($req);
		array_shift($this->params);
		$req->params = array_map(function($param) {
			return $param[0];
		}, $this->params);
		return call_user_func($this->invokeRoute(0, $req, $res), ...$args);
	}

	function invokeRoute(int $index, Request $req, Response $res) {
		if(!isset($this->_mw[$index])) return function(...$args) use($req, $res) {
			return call_user_func($this->_cb, $req, $res, ...$args);
		};
		$nextRes = $this->invokeRoute($index + 1, $req, $res);
		$m = $this->_mw[$index];
		return function(...$args) use($m, $req, $res, $nextRes) {
			return call_user_func($m, $req, $res, $nextRes, ...$args);
		};
	}

	function getByName(string $name) {
		return $name === $this->_name ? $this->path : false;
	}

	protected function pushPage(Request $req) {
		if(!$this->_name) return;
		$req->page[] = $this->_name;
	}
}
?>