<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb986228ed042d16922a036b3668f596c
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\Shortcodes\\' => 23,
            'Grav\\Plugin\\ShortcodeUi\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\Shortcodes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/shortcodes',
        ),
        'Grav\\Plugin\\ShortcodeUi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/plugin',
        ),
    );

    public static $classMap = array (
        'Grav\\Plugin\\ShortcodeUiPlugin' => __DIR__ . '/../..' . '/shortcode-ui.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb986228ed042d16922a036b3668f596c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb986228ed042d16922a036b3668f596c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb986228ed042d16922a036b3668f596c::$classMap;

        }, null, ClassLoader::class);
    }
}