<?php
namespace Tests;

use App\Structural\Adapter\Car;
use App\Structural\Adapter\TurboEngineAdapter;
use App\Structural\Adapter\NormalEngine;
use App\Structural\Adapter\TurboEngine;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterTest
 * @package Tests
 */
class AdapterTest extends TestCase
{
    /* @test */
    public function testCanSTartNormalEngine()
    {
        $engine = new NormalEngine();
        $car = new Car($engine);
        $this->assertTrue($car->start());
    }
    /* @test */
    public function testCanSTartTurboEngine()
    {
        $engine = new TurboEngine();
        $turboAdapter = new TurboEngineAdapter($engine);
        $car = new Car($turboAdapter);
        $this->assertTrue($car->start());
    }
}
