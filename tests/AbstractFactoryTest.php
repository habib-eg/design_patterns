<?php

namespace Tests;

use App\Creational\AbstractFactory\BenzCar;
use App\Creational\AbstractFactory\BMWCar;
use App\Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    /*  @test */
    public function testCanCreateBMWCar()
    {
        $carPrice = 60000;
        $carFactory = new CarAbstractFactory($carPrice);
        $bmw = $carFactory->createBMWCar();
        $this->assertInstanceOf(BMWCar::class,$bmw);
        $this->assertTrue($carPrice + ($carPrice * 0.2) === $bmw->calculatePrice());
    }

    /*  @test */
    public function testCanCreateBenzCar()
    {
        $carPrice = 20000;
        $carFactory = new CarAbstractFactory($carPrice);
        $benz = $carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class,$benz);
        $this->assertTrue($carPrice + ($carPrice * .3) === $benz->calculatePrice());
    }
}