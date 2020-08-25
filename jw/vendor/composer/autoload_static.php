<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd7010d631bb428ad9503518462f45a5
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jwplayer\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jwplayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/jwplayer/jwplatform/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd7010d631bb428ad9503518462f45a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd7010d631bb428ad9503518462f45a5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}