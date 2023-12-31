<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11051e578548f14fa2a370a4234d0079
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11051e578548f14fa2a370a4234d0079::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11051e578548f14fa2a370a4234d0079::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11051e578548f14fa2a370a4234d0079::$classMap;

        }, null, ClassLoader::class);
    }
}
