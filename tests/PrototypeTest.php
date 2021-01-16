<?php
namespace Tests;

use App\Creational\Prototype\AutomaticCarPrototype;
use App\Creational\Prototype\ManualCarPrototype;

class PrototypeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function testCarCreateAutomaticCar()
    {
        $automaticCarPrototype = new AutomaticCarPrototype();
        for ($i = 1; $i <= 10; $i++) {
            $newCar = clone  $automaticCarPrototype;
            $this->assertInstanceOf(AutomaticCarPrototype::class,$newCar);
        }
    }

    /**
     * @test
     */
    public function testCarCreateManualCar()
    {
        $manualCarPrototype = new ManualCarPrototype();
        for ($i = 1; $i <= 10; $i++) {
            $newCar = clone  $manualCarPrototype;
            $this->assertInstanceOf(ManualCarPrototype::class,$newCar);
        }
    }

//    /**
//     * @test
//     */
//    public function testCarCreateAutomaticCarNew()
//    {
//        for ($i = 0; $i <= 10; $i++) {
//            $newCar = new AutomaticCarPrototype;
//            $this->assertInstanceOf(AutomaticCarPrototype::class,$newCar);
//        }
//    }
//
//    /**
//     * @test
//     */
//    public function testCarCreateManualCarNew()
//    {
//        for ($i = 0; $i <= 10; $i++) {
//            $newCar = new ManualCarPrototype;
//            $this->assertInstanceOf(ManualCarPrototype::class,$newCar);
//        }
//    }
}