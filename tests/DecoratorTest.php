<?php

namespace Tests;

use App\Structural\Decorator\Car;
use App\Structural\Decorator\Painting\Colors\BlackPaintingDecorator;
use App\Structural\Decorator\Painting\Colors\BluePaintingDecorator;
use App\Structural\Decorator\Painting\Painting;
use PHPUnit\Framework\TestCase;

/**
 * Class DecoratorTest
 * @package Tests
 */
class DecoratorTest extends TestCase
{
    /* @test */
    public function testCanPrintCarWithBlackAndBlueColors()
    {
        $car = new Car();
        $painting = new Painting();
        $painting = new BlackPaintingDecorator($painting);
        $painting = new BluePaintingDecorator($painting);
        $myCar = $painting->paint($car);
        $this->assertEquals('-blue--black-',$myCar->getColor());
    }
}
