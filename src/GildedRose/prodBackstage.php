<?php


namespace GildedRose;


class prodBackstage extends Item

{
	

	public function updateQuality() {



                //Increase Quality
                $this->quality += 1;
                


                //Backastage Pass quality increases 1 more if below 10

                if ($this->sell_in <= 10) {
                
                    
                    $this->quality += 1;

                }
                //Backastage Pass quality decreases by 1 if below 5

                if ($this->sell_in <= 5) {

                    $this->quality += 1;

                
                }

                // Backastage Pass quality drops to 0 after the concert

                if ($this->sell_in < 0) {

                    $this->quality = 0;
                } 


                 // The Quality of an item is never more than 50

                if ($this->quality > 50) {

                    $this->quality = 50;
                }

                if ($this->sell_in <= 0) {

                    $this->quality = 0;
                }

                // Decrease sell-in date (make it older)

                $this->sell_in -= 1;



	}


}