<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita13889c21a7c06bf99bf75aa055bdf37
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'View\\' => 5,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/view',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita13889c21a7c06bf99bf75aa055bdf37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita13889c21a7c06bf99bf75aa055bdf37::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
