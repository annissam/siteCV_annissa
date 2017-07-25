<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c626b4c2d4042b156a2c668bcbc2f2d
{
    public static $files = array (
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'W\\' => 2,
        ),
        'T' => 
        array (
            'TrueBV\\' => 7,
        ),
        'L' => 
        array (
            'League\\Url\\' => 11,
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'W\\' => 
        array (
            0 => __DIR__ . '/../..' . '/W',
        ),
        'TrueBV\\' => 
        array (
            0 => __DIR__ . '/..' . '/true/punycode/src',
        ),
        'League\\Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/url/src',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SecurityLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/security-lib/lib',
            ),
        ),
        'R' => 
        array (
            'RandomLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/random-lib/lib',
            ),
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c626b4c2d4042b156a2c668bcbc2f2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c626b4c2d4042b156a2c668bcbc2f2d::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit0c626b4c2d4042b156a2c668bcbc2f2d::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0c626b4c2d4042b156a2c668bcbc2f2d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0c626b4c2d4042b156a2c668bcbc2f2d::$classMap;

        }, null, ClassLoader::class);
    }
}
