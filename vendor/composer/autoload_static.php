<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20bd42c5b94c85db65c0a14cff485764
{
    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'GildedRose\\Tests\\' => 
            array (
                0 => __DIR__ . '/../..' . '/tests',
            ),
            'GildedRose\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'GildedRose\\GildedRose' => __DIR__ . '/../..' . '/src/GildedRose/GildedRose.php',
        'GildedRose\\Item' => __DIR__ . '/../..' . '/src/GildedRose/Item.php',
        'GildedRose\\prodAgedBrie' => __DIR__ . '/../..' . '/src/GildedRose/prodAgedBrie.php',
        'GildedRose\\prodBackstage' => __DIR__ . '/../..' . '/src/GildedRose/prodBackstage.php',
        'GildedRose\\prodConjured' => __DIR__ . '/../..' . '/src/GildedRose/prodConjured.php',
        'GildedRose\\prodSulfuras' => __DIR__ . '/../..' . '/src/GildedRose/prodSulfuras.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit20bd42c5b94c85db65c0a14cff485764::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit20bd42c5b94c85db65c0a14cff485764::$classMap;

        }, null, ClassLoader::class);
    }
}
