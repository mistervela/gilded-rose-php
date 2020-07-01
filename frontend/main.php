<?php

require_once __DIR__ . '/../vendor/autoload.php';

use GildedRose\GildedRose;
use GildedRose\Item;

echo "OMGHAI!\n";


 $items = array(
            GildedRose::type('Aged Brie', 10, 10),
            GildedRose::type('Backstage passes to a TAFKAL80ETC concert', 15, 20),
            GildedRose::type('Conjured Mana Cake', 3, 6),
            GildedRose::type('Sulfuras, Hand of Ragnaros', 3, 6)
 );



$days = 3;

if (count($argv) > 1) {
    $days = (int) $argv[1];
}

print_r($items); 

for ($i = 0; $i < $days; $i++) {


    echo("******************************** DAY $i *******************************");
    echo PHP_EOL;
    echo sprintf("%-50s | %-7s | %-7s\n", "NAME", "SELLIN", "QUALITY");
    echo str_repeat("*", 70);
    echo PHP_EOL;

    foreach ($items as $item) {
        $item->updateQuality();
        //echo $item->name . PHP_EOL;
        echo sprintf("%-50s | %-7d | %-7d\n", $item->name, $item->sell_in, $item->quality);
    }
    echo PHP_EOL;
    
}
