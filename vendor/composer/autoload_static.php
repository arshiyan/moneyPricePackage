<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc94e3af27b5d444a834ae21adfc917f6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Arshiyan\\moneyprice\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Arshiyan\\moneyprice\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc94e3af27b5d444a834ae21adfc917f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc94e3af27b5d444a834ae21adfc917f6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}