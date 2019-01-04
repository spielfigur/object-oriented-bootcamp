<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf410fc9101c3e706d211c7f50f3724ef
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf410fc9101c3e706d211c7f50f3724ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf410fc9101c3e706d211c7f50f3724ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
