<?php
use App\ErrorHandler\Handler;

if(DEV_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
}

new Handler;
?>