<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit587e640e7c529d96c46c52bb3fa0ba25
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mahadhi\\Generator\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mahadhi\\Generator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit587e640e7c529d96c46c52bb3fa0ba25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit587e640e7c529d96c46c52bb3fa0ba25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit587e640e7c529d96c46c52bb3fa0ba25::$classMap;

        }, null, ClassLoader::class);
    }
}
