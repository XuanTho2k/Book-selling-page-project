<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8e520cc6a127e25ad17470507261236
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'myApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'myApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8e520cc6a127e25ad17470507261236::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8e520cc6a127e25ad17470507261236::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf8e520cc6a127e25ad17470507261236::$classMap;

        }, null, ClassLoader::class);
    }
}
