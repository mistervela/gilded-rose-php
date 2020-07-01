<?php

namespace GildedRose;

class Item {

    public $name;
    public $sell_in;
    public $quality;

    public function __construct($name, $quality, $sell_in ) {
   
        $this->name = $name;
        $this->quality = $quality;
        $this->sell_in = $sell_in;
        
    }

    public function updateQuality() {

                $this->quality -= 1;
                $this->sell_in -= 1;

                //Once the sell by date has passed, Quality degrades twice as fast

                if($this->sell_in <=0) {

                    $this->quality -= 1;

                }

                //The Quality of an item is never negative

                if($this->quality <=0) {

                    $this->quality = 0;

                }
    



    }




}

