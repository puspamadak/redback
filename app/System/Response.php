<?php
namespace App\System;

class Response {
	public $body = '';
	public $contentType = 'text/plain';
	public $code = 200;
	public $redirected = false;

	function send() {
		if($this->redirected) return;
		header("Content-type: {$this->contentType}");
		http_response_code($this->code);
		if(is_callable($this->body)) call_user_func($this->body);
		else echo $this->body;
	}

	function redirect($path) {
		$this->code = 302;
		$this->redirected = true;
		header("Location: ".BASE_URL.$path);
	}
}
?>