<?php
namespace App\System;

class RouteGroup extends Route {
	protected $subRoutes = [];
	protected $prefix = '';
	protected $name = '';

	function __construct($callback) {
		call_user_func($callback, $this);
	}

	function add(Route $route) {
		$this->subRoutes[] = $route;
	}

	function prefix(String $prefix) {
		$this->prefix = $prefix;
		return $this;
	}

	function match(String $uri, String $method) {
		$len = strlen($this->prefix);
		if(substr($uri, 0, $len) != $this->prefix) return false;
		$uri = trim(substr($uri, $len), '/');
		foreach($this->subRoutes as $route) {
			if(!$route->match($uri, $method)) continue;
			$this->matched = true;
			$this->_cb = function(...$args) use($route) {
				return $route->invoke(...$args);
			};
			return true;
		}
		return false;
	}

	function getByName($name) {
		$len = strlen($this->name);
		if(substr($name, 0, $len) != $this->name) return false;
		$name = trim(substr($name, $len), '.');
		foreach($this->subRoutes as $route) {
			$val = $route->getByName($name);
			if($val !== false) {
				if(isset($route->prefix) && $route->prefix) $val = $route->prefix.'/'.$val;
				return $val;
			}
		}
		return false;
	}
}
?>