<?php


namespace Tests;


use App\Creational\Builder\BENZCarBuilder;
use App\Creational\Builder\BMWCarBuilder;
use App\Creational\Builder\CarProducer;
use App\Creational\Builder\Models\BENZCar;
use App\Creational\Builder\Models\BMWCar;

class BuilderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function testCanProduceBMW()
    {
        $BMWBuilder =new BMWCarBuilder();
        $carProducer = new CarProducer($BMWBuilder);
        $myCar = $carProducer->producer();
        $this->assertInstanceOf(BMWCar::class,$myCar);
    }

    /**
     * @test
     */
    public function testCanProduceBENZ()
    {
        $BENZBuilder =new BENZCarBuilder();
        $carProducer = new CarProducer($BENZBuilder);
        $myCar = $carProducer->producer();
        $this->assertInstanceOf(BENZCar::class,$myCar);
    }
}