<?php
namespace App\ErrorHandler;

class Handler {
    private $canThrow = true;
    private $httpCode = 500;

    public function __construct() {
        set_error_handler([$this, 'errorHandler']);
        set_exception_handler([$this, 'exceptionHandler']);
        register_shutdown_function([$this, 'shutdownHandler']);
    }

    function errorHandler($code, $message, $file, $line) {
        $exception = new \ErrorException($message, $code, $code, $file, $line);
        if($this->canThrow) throw $exception;
        else $this->exceptionHandler($exception);
        return true;
    }

    function exceptionHandler($exception) {
        if(php_sapi_name() === 'cli') {
            echo strval($exception);
            return;
        }
        header('Content-Type: text/html');
        http_response_code($this->httpCode);
        $page = Main::web($exception);
        while(ob_get_level() > 0) ob_end_clean(); //Clear all previous output
        echo $page->render();
    }

    function shutdownHandler() {
        $this->canThrow = false;
        $error = error_get_last();
        if($error) $this->errorHandler($error['type'], $error['message'], $error['file'], $error['line']);
    }
}
?>