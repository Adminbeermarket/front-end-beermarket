<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite268005568d4508172cf6678ce865075
{
    public static $classMap = array (
        'AdminAjaxPsAgeCheckerController' => __DIR__ . '/../..' . '/controllers/admin/AdminAjaxPsAgeCheckerController.php',
        'PrestaShop\\Modules\\PsAgeChecker\\ApiFaq' => __DIR__ . '/../..' . '/classes/ApiFaq.php',
        'PsAgeChecker' => __DIR__ . '/../..' . '/psagechecker.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite268005568d4508172cf6678ce865075::$classMap;

        }, null, ClassLoader::class);
    }
}
