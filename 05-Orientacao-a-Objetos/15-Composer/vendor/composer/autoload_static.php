<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit879c54abdf2ac8ef87b4cdc9f48e2876
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit879c54abdf2ac8ef87b4cdc9f48e2876::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit879c54abdf2ac8ef87b4cdc9f48e2876::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit879c54abdf2ac8ef87b4cdc9f48e2876::$classMap;

        }, null, ClassLoader::class);
    }
}
