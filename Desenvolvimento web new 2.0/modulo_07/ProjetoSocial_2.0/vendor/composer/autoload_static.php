<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9c17ef763659648c1e64f598831eccb
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'dankiCode\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'dankiCode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/dankiCode',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9c17ef763659648c1e64f598831eccb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9c17ef763659648c1e64f598831eccb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9c17ef763659648c1e64f598831eccb::$classMap;

        }, null, ClassLoader::class);
    }
}
