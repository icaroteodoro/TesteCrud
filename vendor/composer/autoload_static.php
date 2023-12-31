<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6287b3d6c207f8beb579cc34ad5c6b00
{
    public static $files = array (
        'b296b028952bc512f83ff16d0c6dd835' => __DIR__ . '/../..' . '/src/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PhpKit\\ExtPDO\\' => 14,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PhpKit\\ExtPDO\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-kit/ext-pdo/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6287b3d6c207f8beb579cc34ad5c6b00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6287b3d6c207f8beb579cc34ad5c6b00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6287b3d6c207f8beb579cc34ad5c6b00::$classMap;

        }, null, ClassLoader::class);
    }
}
