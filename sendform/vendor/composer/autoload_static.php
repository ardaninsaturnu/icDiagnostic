<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6b3f0ca7a851c964d4dc6820cdf2b8c
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6b3f0ca7a851c964d4dc6820cdf2b8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6b3f0ca7a851c964d4dc6820cdf2b8c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
