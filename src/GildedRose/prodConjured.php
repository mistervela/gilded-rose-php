<?php


namespace GildedRose;


class prodConjured extends Item

{
	


	public function updateQuality() {

                //"Conjured" items degrade in Quality twice as fast as normal items

                //Increase Quality
                

                $this->quality -= 2;
                $this->sell_in -= 1;
                
                if($this->sell_in <=0) {

                    $this->quality -=2;

                }

                if($this->quality <=0) {

                    $this->quality = 0;

                }

           



	}


}