<?php
namespace App\Controller\Template;

use App\Library\Web\Config;
use App\System\View;

class Home extends View {
	public $config;

	function __construct($req, $subView, $pageTitle, $headerTitle = null, $parent = null, $logo = null) {
		parent::__construct('main');
		$this->config = new Config($req);
		$this->config->title = $pageTitle;
		if($logo) $this->config->logo = $logo;
		$this->data([
			'config' => $this->config,
			'page' => implode(',', $req->page),
			'title' => $headerTitle ?? $pageTitle,
			'parent' => $parent
		]);
		$this->subView($subView);
	}
}
?>