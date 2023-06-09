<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6de0cb1aaa3f8007ce05a316f8db56dd
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit6de0cb1aaa3f8007ce05a316f8db56dd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6de0cb1aaa3f8007ce05a316f8db56dd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6de0cb1aaa3f8007ce05a316f8db56dd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
