<?php
namespace App\ErrorHandler;

use App\System\View;
use App\Library\Web;

class Main {
    static function web($exception) {
        global $request;
        $config = new Web\Config($request);
        $config->title = "Error";
        $config->logo = ASSET['img'].'error.svg';
        $config->privatePage = true;
        $page = View::create('error/viewer')->data(compact('config', 'exception'));
        return $page;
    }
}
?>