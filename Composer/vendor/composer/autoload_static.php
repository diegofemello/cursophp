<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fb7abc4546ad1e13bb3f53984d393d1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fb7abc4546ad1e13bb3f53984d393d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fb7abc4546ad1e13bb3f53984d393d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3fb7abc4546ad1e13bb3f53984d393d1::$classMap;

        }, null, ClassLoader::class);
    }
}
