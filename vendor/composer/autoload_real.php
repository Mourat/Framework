<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcfd9c1a40c19aa380c8ee7d41265f76f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitcfd9c1a40c19aa380c8ee7d41265f76f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcfd9c1a40c19aa380c8ee7d41265f76f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcfd9c1a40c19aa380c8ee7d41265f76f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}