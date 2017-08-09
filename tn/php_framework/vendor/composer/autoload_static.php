<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8d83b41117b0199c38f1d1853b934bf
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'Whoops' => 
            array (
                0 => __DIR__ . '/..' . '/filp/whoops/src',
            ),
        ),
    );

    public static $classMap = array (
        'Whoops\\Module' => __DIR__ . '/..' . '/filp/whoops/src/deprecated/Zend/Module.php',
        'Whoops\\Provider\\Zend\\ExceptionStrategy' => __DIR__ . '/..' . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
        'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => __DIR__ . '/..' . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8d83b41117b0199c38f1d1853b934bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8d83b41117b0199c38f1d1853b934bf::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita8d83b41117b0199c38f1d1853b934bf::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita8d83b41117b0199c38f1d1853b934bf::$classMap;

        }, null, ClassLoader::class);
    }
}
