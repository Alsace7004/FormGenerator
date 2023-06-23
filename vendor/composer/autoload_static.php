<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2cbe2104bb36a285f4bace864b758dee
{
    public static $files = array (
        '9ddd9da5322ceccb2945c6a0309f632f' => __DIR__ . '/../..' . '/app/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alsace\\FormGenerator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alsace\\FormGenerator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Alsace\\FormGenerator\\Components\\DataGrid' => __DIR__ . '/../..' . '/src/Components/DataGrid.php',
        'Alsace\\FormGenerator\\Components\\PageBuilder' => __DIR__ . '/../..' . '/src/Components/PageBuilder.php',
        'Alsace\\FormGenerator\\Components\\Tag' => __DIR__ . '/../..' . '/src/Components/Tag.php',
        'Alsace\\FormGenerator\\Components\\Test' => __DIR__ . '/../..' . '/src/Components/Test.php',
        'Alsace\\FormGenerator\\Controllers\\FormBuilderController' => __DIR__ . '/../..' . '/src/Controllers/FormBuilderController.php',
        'Alsace\\FormGenerator\\Providers\\FormGeneratorServiceProvider' => __DIR__ . '/../..' . '/src/Providers/FormGeneratorServiceProvider.php',
        'Alsace\\FormGenerator\\config\\GenerateFile' => __DIR__ . '/../..' . '/src/config/GenerateFile.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2cbe2104bb36a285f4bace864b758dee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2cbe2104bb36a285f4bace864b758dee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2cbe2104bb36a285f4bace864b758dee::$classMap;

        }, null, ClassLoader::class);
    }
}
