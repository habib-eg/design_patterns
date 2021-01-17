<?php

namespace Tests;

use App\Structural\Composite\BigBox;
use App\Structural\Composite\GiftBox;
use App\Structural\Composite\SimpleBox;
use PHPUnit\Framework\TestCase;

/**
 * Class CompositeTest
 * @package Tests
 */
class CompositeTest extends TestCase
{
    /* @test */
    public function testCanGetTotalPriceOfPackageTree()
    {
        $products[] = new SimpleBox(100);
        $products[] = new SimpleBox(200);
        $bigBox = new BigBox($products);
        $this->assertEquals(300,$bigBox->getPrice());
    }
    /* @test */
    public function testCanGetTotalPriceOfPackageTreeWithAdd()
    {
        $products[] = new SimpleBox(100);
        $products[] = new SimpleBox(200);
        $bigBox = new BigBox($products);
        $bigBox->add(new SimpleBox(300));
        $bigBox->add(new GiftBox(300,100));
        $this->assertEquals(1000,$bigBox->getPrice());
    }
    /* @test */
    public function testCanGetTotalPriceOfPackageTreeWithRemove()
    {
        $prices = [
            0=>1000,
            1=>100,
            2=>200,
            3=>300,
            4=>300,
            5=>350,
        ];
        $simpleBox = new SimpleBox($prices[0]);
        $products[] = new SimpleBox($prices[1]);
        $products[] = new SimpleBox($prices[2]);
        $products[] = $simpleBox;
        $bigBox = new BigBox($products);
        $bigBox
            ->add(new SimpleBox($prices[3]))
            ->add(new GiftBox($prices[4],$prices[5]))
            ->remove($simpleBox);
        unset($prices[0]);
        $this->assertEquals(array_sum($prices),$bigBox->getPrice());
    }
}
