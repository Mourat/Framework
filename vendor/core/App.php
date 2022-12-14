<?php

namespace core;

class App
{
    public static $app;

    public function __construct()
    {
        new ErrorHandler();
        self::$app = Registry::getInstance();
        $this->getParams();
    }

    protected function getParams()
    {
        if (is_file( CONFIG . '/params.php' )){
            $params = require_once CONFIG . '/params.php';
            if (!empty($params)){
                foreach ($params as $key => $value) {
                    self::$app->setProperty($key, $value);
                }
            }
        } else {
            die('<b>Error</b>: File "/config/params.php" not found.');
        }
    }
}