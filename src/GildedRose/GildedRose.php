<?php


namespace GildedRose;

class GildedRose {


    public static $lookup = [

        'Aged Brie' => prodAgedBrie::class,
        'Backstage passes to a TAFKAL80ETC concert' => prodBackstage::class,
        'Sulfuras, Hand of Ragnaros' => prodSulfuras::class,
        'Conjured' => prodConjured::class,

    ];



     public static function type($name, $quality, $sell_in) {
       


        if (array_key_exists($name, self::$lookup)) {

            return new self::$lookup[$name]($name, $quality, $sell_in);

        }

        return new Item($name, $quality, $sell_in);

    }


}

