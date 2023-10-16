<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7dccc7299075f290c90723d1d9beefd2
{
    public static $files = array (
        '0e06038a5928895827b8dc4e6e5c3baf' => __DIR__ . '/../..' . '/config.php',
        '39f7846bea406fa01636fe6e5513a613' => __DIR__ . '/../..' . '/itemController.php',
        '22c3367c407cbf83648fa5b1ea7f7e43' => __DIR__ . '/../..' . '/router.php',
    );

    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'views\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/views',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7dccc7299075f290c90723d1d9beefd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7dccc7299075f290c90723d1d9beefd2::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit7dccc7299075f290c90723d1d9beefd2::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit7dccc7299075f290c90723d1d9beefd2::$classMap;

        }, null, ClassLoader::class);
    }
}
