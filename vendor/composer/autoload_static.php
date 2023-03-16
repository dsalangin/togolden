<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf1415251b97fc16f6d048c1b90ead95
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf1415251b97fc16f6d048c1b90ead95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf1415251b97fc16f6d048c1b90ead95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf1415251b97fc16f6d048c1b90ead95::$classMap;

        }, null, ClassLoader::class);
    }
}