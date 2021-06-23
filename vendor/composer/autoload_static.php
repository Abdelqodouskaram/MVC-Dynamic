<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32c84144d4ee145717ca3a2b5b9c6cda
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32c84144d4ee145717ca3a2b5b9c6cda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32c84144d4ee145717ca3a2b5b9c6cda::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32c84144d4ee145717ca3a2b5b9c6cda::$classMap;

        }, null, ClassLoader::class);
    }
}
