<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7de15a12b2c74e61531d38c870eb2939
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7de15a12b2c74e61531d38c870eb2939::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7de15a12b2c74e61531d38c870eb2939::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7de15a12b2c74e61531d38c870eb2939::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7de15a12b2c74e61531d38c870eb2939::$classMap;

        }, null, ClassLoader::class);
    }
}
