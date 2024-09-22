<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51e566e034458d68d0dd3486dbfd6f45
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51e566e034458d68d0dd3486dbfd6f45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51e566e034458d68d0dd3486dbfd6f45::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit51e566e034458d68d0dd3486dbfd6f45::$classMap;

        }, null, ClassLoader::class);
    }
}
