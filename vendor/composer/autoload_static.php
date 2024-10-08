<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit242a08442a8be3486f983d5f7986b51b
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit242a08442a8be3486f983d5f7986b51b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit242a08442a8be3486f983d5f7986b51b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit242a08442a8be3486f983d5f7986b51b::$classMap;

        }, null, ClassLoader::class);
    }
}
