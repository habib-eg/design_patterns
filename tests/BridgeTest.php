<?php

namespace Tests;

use App\Structural\Bridge\BENZCar;
use App\Structural\Bridge\BlueCar;
use App\Structural\Bridge\BMWCar;
use App\Structural\Bridge\RedCar;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgeTest
 * @package Tests
 */
class BridgeTest extends TestCase
{
    /* @test */
    public function testCanCreateBlueBMWCar()
    {
        $carColor = new BlueCar();
        $car = new BMWCar($carColor);
        $this->assertEquals(sprintf('this car type is %s and the car color is %s','BMW','Blue'),$car->getProduct());
    }
    /* @test */
    public function testCanCreateRedBMWCar()
    {
        $carColor = new RedCar();
        $car = new BMWCar($carColor);
        $this->assertEquals(sprintf('this car type is %s and the car color is %s','BMW','Red'),$car->getProduct());
    }
    /* @test */
    public function testCanCreateBlueBENZCar()
    {
        $carColor = new BlueCar();
        $car = new BENZCar($carColor);
        $this->assertEquals(sprintf('this car type is %s and the car color is %s','BENZ','Blue'),$car->getProduct());
    }
    /* @test */
    public function testCanCreateRedBENZCar()
    {
        $carColor = new RedCar();
        $car = new BENZCar($carColor);
        $this->assertEquals(sprintf('this car type is %s and the car color is %s','BENZ','Red'),$car->getProduct());
    }
}
