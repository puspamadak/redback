<?php
namespace App\Controller\Template;

use App\Library\Web\Config;
use App\System\View;

class Error extends View {
	public $config;

	function __construct($req, $res, $code, $msg, $title = null, $logo = null) {
		parent::__construct('error/generic');
		$this->config = new Config($req);
		$this->config->title = $title ?? $msg;
		if($logo) $this->config->logo = $logo;
		$res->code = $code;
		$this->data([
			'config' => $this->config,
			'code' => $code,
			'message' => $msg
		]);
	}
}
?>