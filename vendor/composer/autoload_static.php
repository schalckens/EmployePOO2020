<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteca1513ef2839687daf0f51c407bcee3
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Includes\\' => 9,
        ),
        'C' => 
        array (
            'ClassesMetier\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'ClassesMetier\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteca1513ef2839687daf0f51c407bcee3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteca1513ef2839687daf0f51c407bcee3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteca1513ef2839687daf0f51c407bcee3::$classMap;

        }, null, ClassLoader::class);
    }
}
