<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94f4584e3c52036f218e6381f4c88046
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit94f4584e3c52036f218e6381f4c88046::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94f4584e3c52036f218e6381f4c88046::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
