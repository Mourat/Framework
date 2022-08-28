<?php

define('DEBUG', true);
define('ROOT', dirname(__DIR__));
define('www', ROOT . '/public');
define('APP', ROOT . '/app');
define('CORE', ROOT . '/vendor/core');
define('HELPERS', ROOT . '/vendor/core/helpers');
define('CACHE', ROOT . '/tmp/cache');
define('LOGS', ROOT . '/tmp/logs');
define('CONFIG', ROOT . '/config');
define('LAYOUT', ROOT . '/layout');
define('PATH', ROOT . "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}");
define('ADMIN', ROOT . "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/admin");
define('NO_IMAGE', 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';