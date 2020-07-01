<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;



class GildedRoseTest extends \PHPUnit\Framework\TestCase
{
    public function test_agedbrie_before_sellin_date_updates_normally()
    {
        $item = GildedRose::type('Aged Brie', 10, 10);
        $item->updateQuality();
        $this->assertEquals($item->quality, 11);
        $this->assertEquals($item->sell_in, 9);
    }

    public function test_agedbrie_on_sellin_date_updates_normally()
    {
        $item = GildedRose::type('Aged Brie', 10, 0);
        $item->updateQuality();
        $this->assertEquals($item->quality, 12);
        $this->assertEquals($item->sell_in, -1);
    }

    public function test_agedbrie_after_sellin_date_updates_normally()
    {
        $item = GildedRose::type('Aged Brie', 10, -5);
        $item->updateQuality();
        $this->assertEquals($item->quality, 12);
        $this->assertEquals($item->sell_in, -6);
    }

    public function test_agedbrie_before_sellin_date_with_maximum_quality()
    {
        $item = GildedRose::type('Aged Brie', 50, 5);
        $item->updateQuality();
        $this->assertEquals($item->quality, 50);
        $this->assertEquals($item->sell_in, 4);
    }

    public function test_agedbrie_on_sellin_date_near_maximum_quality()
    {
        $item = GildedRose::type('Aged Brie', 49, 0);
        $item->updateQuality();
        $this->assertEquals($item->quality, 50);
        $this->assertEquals($item->sell_in, -1);
    }

    public function test_agedbrie_on_sellin_date_with_maximum_quality()
    {
        $item = GildedRose::type('Aged Brie', 50, 0);
        $item->updateQuality();
        $this->assertEquals($item->quality, 50);
        $this->assertEquals($item->sell_in, -1);
    }

    public function test_agedbrie_after_sellin_date_with_maximum_quality()
    {
        $item = GildedRose::type('Aged Brie', 50, -10);
        $item->updateQuality();
        $this->assertEquals($item->quality, 50);
        $this->assertEquals($item->sell_in, -11);
    }

    public function test_backstage_pass_before_sellin_date_updates_normally()
    {
        $item = GildedRose::type('Backstage passes to a TAFKAL80ETC concert', 10, 10);
        $item->updateQuality();
        $this->assertEquals($item->quality, 12);
        $this->assertEquals($item->sell_in, 9);
    }

    public function test_backstagepass_before_sellin_date_updates_normally()
    {
        $item = GildedRose::type('Backstage passes to a TAFKAL80ETC concert', 10, 11);
        $item->updateQuality();
        $this->assertEquals($item->quality, 11);
        $this->assertEquals($item->sell_in, 10);
    }

    public function test_backstage_pass_five_days_left_to_sell()
    {
        $item = GildedRose::type('Backstage passes to a TAFKAL80ETC concert', 10, 5);
        $item->updateQuality();
        $this->assertEquals($item->quality, 13);
        $this->assertEquals($item->sell_in, 4);
    }

    public function test_backstage_pass_drops_to_zero_after_sellin_date()
    {
        $item = GildedRose::type('Backstage passes to a TAFKAL80ETC concert', 10, 0);
        $item->updateQuality();
        $this->assertEquals($item->quality, 0);
        $this->assertEquals($item->sell_in, -1);
    }

    public function test_backstage_pass_close_to_sellin_date_with_max_quality()
    {
        $item = GildedRose::type('Backstage passes to a TAFKAL80ETC concert', 50, 10);
        $item->updateQuality();
        $this->assertEquals($item->quality, 50);
        $this->assertEquals($item->sell_in, 9);
    }

    public function test_backstage_pass_very_close_to_sellin_date_with_max_quality()
    {
        $item = GildedRose::type('Backstage passes to a TAFKAL80ETC concert', 50, 5);
        $item->updateQuality();
        $this->assertEquals($item->quality, 50);
        $this->assertEquals($item->sell_in, 4);
    }

    public function test_backstage_pass_quality_zero_after_sell_date()
    {
        $item = GildedRose::type('Backstage passes to a TAFKAL80ETC concert', 50, -5);
        $item->updateQuality();
        $this->assertEquals($item->quality, 0);
        $this->assertEquals($item->sell_in, -6);
    }

    public function test_sulfuras_before_sellin_date()
    {
        $item = GildedRose::type('Sulfuras, Hand of Ragnaros', 10, 10);
        $item->updateQuality();
        $this->assertEquals($item->quality, 10);
        $this->assertEquals($item->sell_in, 10);
    }

    public function test_sulfuras_on_sellin_date()
    {
        $item = GildedRose::type('Sulfuras, Hand of Ragnaros', 10, 0);
        $item->updateQuality();
        $this->assertEquals($item->quality, 10);
        $this->assertEquals($item->sell_in, 0);
    }

    public function test_sulfuras_after_sellin_date()
    {
        $item = GildedRose::type('Sulfuras, Hand of Ragnaros', 10, -1);
        $item->updateQuality();
        $this->assertEquals($item->quality, 10);
        $this->assertEquals($item->sell_in, -1);
    }
  
    public function test_conjured_before_sellin_date_updates_normally()
    {
        $item = GildedRose::type('Conjured', 10, 10);
        $item->updateQuality();
        $this->assertEquals($item->quality, 8);
        $this->assertEquals($item->sell_in, 9);
    }
    public function test_conjured_does_not_degrade_passed_zero()
    {
        $item = GildedRose::type('Conjured', 0, 10);
        $item->updateQuality();
        $this->assertEquals($item->quality, 0);
        $this->assertEquals($item->sell_in, 9);
    }
    public function test_conjured_after_sellin_date_degrades_twice_as_fast()
    {
        $item = GildedRose::type('Conjured', 10, 0);
        $item->updateQuality();
        $this->assertEquals($item->quality, 6);
        $this->assertEquals($item->sell_in, -1);
    }
}
