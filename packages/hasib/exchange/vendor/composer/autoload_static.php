<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit066bcf95945fefbc2024e6570ae0f58a
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hasib\\Exchange\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hasib\\Exchange\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit066bcf95945fefbc2024e6570ae0f58a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit066bcf95945fefbc2024e6570ae0f58a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit066bcf95945fefbc2024e6570ae0f58a::$classMap;

        }, null, ClassLoader::class);
    }
}
