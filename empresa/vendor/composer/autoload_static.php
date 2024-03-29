<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92c3450c96b686d922fc9d865c6f723e
{
    public static $files = array (
        '635d3948fa92ee114b561cbc532a57fc' => __DIR__ . '/../..' . '/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit92c3450c96b686d922fc9d865c6f723e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92c3450c96b686d922fc9d865c6f723e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92c3450c96b686d922fc9d865c6f723e::$classMap;

        }, null, ClassLoader::class);
    }
}
