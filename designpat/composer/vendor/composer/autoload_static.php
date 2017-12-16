<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf75c0e1e6d8dcaffae4a5f33bf7655f8
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IcyApril\\ChapterTwo\\' => 20,
            'IcyApril\\ChapterOne\\' => 20,
        ),
        'H' => 
        array (
            'Hxhking\\Properties\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IcyApril\\ChapterTwo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'IcyApril\\ChapterOne\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Hxhking\\Properties\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf75c0e1e6d8dcaffae4a5f33bf7655f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf75c0e1e6d8dcaffae4a5f33bf7655f8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
