<?php

namespace core;

class ErrorHandler
{
    public function __construct()
    {
        (DEBUG) ? error_reporting(-1) : error_reporting(0);
        set_exception_handler([$this, 'exceptionHandler']);
        set_error_handler([$this, 'errorHandler']);
        ob_start();
        register_shutdown_function([$this, 'fatalErrorHandler']);
    }

    public function errorHandler($errNo, $errStr, $errFile, $errLine): void
    {
        $this->logError($errStr, $errFile, $errLine);
        $this->displayError($errNo, $errStr, $errFile, $errLine);
    }

    public function fatalErrorHandler(): void
    {
        $error = error_get_last();
        if (!empty($error) && $error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)) {
            $this->logError($error['message'], $error['file'], $error['line']);
            ob_end_clean();
            $this->displayError($error['type'], $error['message'], $error['file'], $error['line']);
        } else {
            ob_end_flush();
        }
    }

    public function exceptionHandler(\Throwable $e): void
    {
        $this->logError($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Exception', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected function logError(string $message = '', string $file = '', string $line = ''): void
    {
        file_put_contents(
            filename: LOGS . '/errors.log',
            data: "[" . date('Y-m-d H:i:s') . "] Description: {$message} | File: {$file} | Line: {$line}\n=================\n",
            flags: FILE_APPEND
        );
    }

    protected function displayError($errNo, $errStr, $errFile, $errLine, $response = 500)
    {
        $response = ($response === 0) ? 404 : $response;
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require www . '/errors/404.php';
            die;
        }
        (DEBUG) ? require www . '/errors/development.php' : require www . '/errors/production.php';
        die;
    }
}