<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77ca31d05830c5cbb7b3c4b0da0e680a
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit77ca31d05830c5cbb7b3c4b0da0e680a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit77ca31d05830c5cbb7b3c4b0da0e680a::$classMap;

        }, null, ClassLoader::class);
    }
}
