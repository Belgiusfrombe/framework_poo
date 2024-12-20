<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61b297db981397bf950ac61c1609181e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
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
        'App\\Controllers\\RecipesController' => __DIR__ . '/../..' . '/app/controllers/RecipesController.php',
        'App\\Models\\Recipe' => __DIR__ . '/../..' . '/app/models/Recipe.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\Helpers' => __DIR__ . '/../..' . '/core/Helpers.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61b297db981397bf950ac61c1609181e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61b297db981397bf950ac61c1609181e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit61b297db981397bf950ac61c1609181e::$classMap;

        }, null, ClassLoader::class);
    }
}
