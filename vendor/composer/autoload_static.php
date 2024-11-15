<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd164fc0fe83bee74b0850173c4dbd199
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\Classes\\' => 13,
        ),
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/classes',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd164fc0fe83bee74b0850173c4dbd199::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd164fc0fe83bee74b0850173c4dbd199::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd164fc0fe83bee74b0850173c4dbd199::$classMap;

        }, null, ClassLoader::class);
    }
}
