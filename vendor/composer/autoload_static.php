<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a55a26f0108ec70a5b685ef33b7cc77
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Noorfarooqy\\Credofaster\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Noorfarooqy\\Credofaster\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a55a26f0108ec70a5b685ef33b7cc77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a55a26f0108ec70a5b685ef33b7cc77::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a55a26f0108ec70a5b685ef33b7cc77::$classMap;

        }, null, ClassLoader::class);
    }
}
