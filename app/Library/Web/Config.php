<?php
namespace App\Library\Web;

use App\System\Request;

class Config {
	public $title = SITE['title'];
	public $logo = ASSET['img'].SITE['logo'];
	public $language = 'en';
	public $locale = 'en_us';
	public $description = '';
	public $type = 'website';
	public $image = '';
	public $url, $req;
	public $author = 'Puspam Adak';
	public $privatePage = false;

	function __construct(Request $req) {
		$this->req = $req;
		$this->url = $req->base_url;
	}
}
?>