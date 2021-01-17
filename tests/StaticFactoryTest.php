<?php

namespace Tests;

use App\Creational\StaticFactory\BENZCar;
use App\Creational\StaticFactory\BMWCar;
use App\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function testCanCreateBMW()
    {
        $this->assertInstanceOf(BMWCar::class,StaticFactory::factory('BMW'));
    }

    /**
     * @test
     */
    public function testCanCreateBENZ()
    {
        $this->assertInstanceOf(BENZCar::class,StaticFactory::factory('BENZ'));
    }
    /**
     * @test
     */
    public function testIsFactoryReturnNull()
    {
        $this->assertNull(StaticFactory::factory('testIsFactoryReturnNull'));
    }
}
