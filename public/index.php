<?php
if (PHP_VERSION_ID < 80000) {
    die('Web site requires a minimum PHP version of 8.0. Your current version is ' . PHP_VERSION);
}

require_once dirname(__DIR__) . '/config/init.php';

new \core\App();

//echo (\core\App::$app->getProperty('pagination'));
//core\App::$app->setProperty('test', 'TEST');
//
//var_dump(\core\App::$app->getProperties());

//throw new Exception(message: 'Shit happens!', code: 404);
echo 'Hello';