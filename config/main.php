<?php
require_once __DIR__.'/env.php';
require_once __DIR__.'/dirs.php';
define('SITE', require_once DIR['data'].'site.php');
require_once __DIR__.'/error.php';
require_once __DIR__.'/asset.php';

if(php_sapi_name() !== 'cli') {
    define('PROTOCOL', isset($_SERVER['HTTPS']) ? 'https' : 'http');
    define('HOST_URL', PROTOCOL.'://'.$_SERVER['HTTP_HOST'].'/');
    define('BASE_URL', HOST_URL.SUB_DIR);
}

// Helpers
require_once BASE_DIR.'app/Library/helpers.php';
?>