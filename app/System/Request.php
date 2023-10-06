<?php
namespace App\System;

class Request {
	public $protocol, $host, $host_url, $base_url, $url, $query;
	public $method, $body, $files, $data;
	public $params = [], $page = [];

	function __construct() {
		$this->method = $_SERVER['REQUEST_METHOD'];
		$parts = explode('?', $_SERVER['REQUEST_URI']);
		$this->protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
		$this->host = $_SERVER['HTTP_HOST'];
		$this->host_url = $this->protocol.'://'.$this->host.'/';
		$this->base_url = $this->host_url.SUB_DIR;
		$this->url = trim(substr($parts[0], strlen(SUB_DIR)), '/');
		$this->query = $_GET;
		$this->body = $_POST;
	}

	function getRawBody() {
		return file_get_contents('php://input');
	}

	function header($name) {
		return $_SERVER['HTTP_'.strtoupper($name)] ?? null;
	}
}
?>