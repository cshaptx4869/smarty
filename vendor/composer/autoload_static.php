<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdcba5ff85c197002b51daa3cbd7a1f45
{
    public static $classMap = array (
        'MySQL' => __DIR__ . '/../..' . '/class/mysql.class.php',
        'Smarty' => __DIR__ . '/../..' . '/smarty/Smarty.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitdcba5ff85c197002b51daa3cbd7a1f45::$classMap;

        }, null, ClassLoader::class);
    }
}
