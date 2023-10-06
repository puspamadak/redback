<?php
namespace App\Controller\Template;

use App\Library\Web\Config;
use App\System\View;

class User extends View {
	public $config;

	function __construct($req, $subView, $pageTitle, $headerTitle = null, $logo = null) {
		parent::__construct('user/main');
		$this->config = new Config($req);
		$this->config->title = $pageTitle;
		if($logo) $this->config->logo = $logo;
		$this->data([
			'config' => $this->config,
			'page' => implode(',', $req->page),
			'title' => $headerTitle ?? $pageTitle
		]);
		$this->subView($subView);
	}
}
?>