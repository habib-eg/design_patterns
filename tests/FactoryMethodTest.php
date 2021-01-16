<?php


namespace Tests;


use App\Creational\FactoryMethod\BENZBrand;
use App\Creational\FactoryMethod\BENZBrandFactory;
use App\Creational\FactoryMethod\BMWBrand;
use App\Creational\FactoryMethod\BMWBrandFactory;

class FactoryMethodTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function testCanBuildBMWBrand()
    {
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf(BMWBrand::class,$myBrand);
    }

    /**
     * @test
     */
    public function testCanBuildBENZBrand()
    {
        $brandFactory = new BENZBrandFactory();
        $myBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf(BENZBrand::class,$myBrand);
    }
}