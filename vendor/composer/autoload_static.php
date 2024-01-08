<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3352852b0cd5b02df56a1958cb16361
{
    public static $files = array (
        'e39a8b23c42d4e1452234d762b03835a' => __DIR__ . '/..' . '/ramsey/uuid/src/functions.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'e54d4abbfb143f3da5b4e1588a89eb32' => __DIR__ . '/../..' . '/src/CoreConstants.php',
    );

    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'raklib\\server\\ipc\\' => 18,
            'raklib\\' => 7,
        ),
        'p' => 
        array (
            'pocketmine\\utils\\' => 17,
            'pocketmine\\snooze\\' => 18,
            'pocketmine\\network\\mcpe\\protocol\\' => 33,
            'pocketmine\\nbt\\' => 15,
            'pocketmine\\math\\' => 16,
            'pocketmine\\errorhandler\\' => 24,
            'pocketmine\\color\\' => 17,
            'pocketmine\\' => 11,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Filesystem\\' => 29,
        ),
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
            'Ramsey\\Collection\\' => 18,
        ),
        'D' => 
        array (
            'DaveRandom\\CallbackValidator\\' => 29,
        ),
        'B' => 
        array (
            'Brick\\Math\\' => 11,
        ),
        'A' => 
        array (
            'Ahc\\Json\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'raklib\\server\\ipc\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/raklib-ipc/src',
        ),
        'raklib\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/raklib/src',
        ),
        'pocketmine\\utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/binaryutils/src',
        ),
        'pocketmine\\snooze\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/snooze/src',
        ),
        'pocketmine\\network\\mcpe\\protocol\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/bedrock-protocol/src',
        ),
        'pocketmine\\nbt\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/nbt/src',
        ),
        'pocketmine\\math\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/math/src',
        ),
        'pocketmine\\errorhandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/errorhandler/src',
        ),
        'pocketmine\\color\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/color/src',
        ),
        'pocketmine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Ramsey\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/collection/src',
        ),
        'DaveRandom\\CallbackValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/callback-validator/src',
        ),
        'Brick\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/src',
        ),
        'Ahc\\Json\\' => 
        array (
            0 => __DIR__ . '/..' . '/adhocore/json-comment/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonMapper' => 
            array (
                0 => __DIR__ . '/..' . '/pocketmine/netresearch-jsonmapper/src',
            ),
        ),
    );

    public static $classMap = array (
        'AttachableLogger' => __DIR__ . '/..' . '/pocketmine/log/src/AttachableLogger.php',
        'BufferedLogger' => __DIR__ . '/..' . '/pocketmine/log/src/BufferedLogger.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GlobalLogger' => __DIR__ . '/..' . '/pocketmine/log/src/GlobalLogger.php',
        'LogLevel' => __DIR__ . '/..' . '/pocketmine/log/src/LogLevel.php',
        'Logger' => __DIR__ . '/..' . '/pocketmine/log/src/Logger.php',
        'PrefixedLogger' => __DIR__ . '/..' . '/pocketmine/log/src/PrefixedLogger.php',
        'SimpleLogger' => __DIR__ . '/..' . '/pocketmine/log/src/SimpleLogger.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3352852b0cd5b02df56a1958cb16361::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3352852b0cd5b02df56a1958cb16361::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf3352852b0cd5b02df56a1958cb16361::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf3352852b0cd5b02df56a1958cb16361::$classMap;

        }, null, ClassLoader::class);
    }
}
