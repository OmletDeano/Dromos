<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfa10b7714393d0a05e9f119aade9a5a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbfa10b7714393d0a05e9f119aade9a5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbfa10b7714393d0a05e9f119aade9a5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbfa10b7714393d0a05e9f119aade9a5a::$classMap;

        }, null, ClassLoader::class);
    }
}
