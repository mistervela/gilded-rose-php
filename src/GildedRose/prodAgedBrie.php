<?php


namespace GildedRose;


class prodAgedBrie extends Item

{
	

	
	public function updateQuality() {


            $this->quality += 1;
            $this->sell_in -= 1;
            

            // Increases in Quality as it gets older

            if ($this->sell_in <= 0 ) {

                $this->quality +=1;


            }

            // The Quality of an item is never more than 50

            if ($this->quality > 50) {

                $this->quality = 50;
            }



		}


}