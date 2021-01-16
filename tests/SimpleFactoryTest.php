<?php


namespace Tests;


use App\Creational\SimpleFactory\Car;
use App\Creational\SimpleFactory\CarSimpleFactory;

class SimpleFactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function testCanCreateCar()
    {
        $factory = new CarSimpleFactory();
        $car =  $factory->createCar('BMW');

        $this->assertInstanceOf(Car::class,$car);
    }
}