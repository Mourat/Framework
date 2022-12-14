<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcfd9c1a40c19aa380c8ee7d41265f76f
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcfd9c1a40c19aa380c8ee7d41265f76f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcfd9c1a40c19aa380c8ee7d41265f76f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcfd9c1a40c19aa380c8ee7d41265f76f::$classMap;

        }, null, ClassLoader::class);
    }
}
