<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d339ac93fb16e338869d262d17ddbb2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyVendor\\MyPackage\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyVendor\\MyPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d339ac93fb16e338869d262d17ddbb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d339ac93fb16e338869d262d17ddbb2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d339ac93fb16e338869d262d17ddbb2::$classMap;

        }, null, ClassLoader::class);
    }
}
