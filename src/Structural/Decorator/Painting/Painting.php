<?php

namespace App\Structural\Decorator\Painting;
use App\Structural\Decorator\Car;

/**
 * Class Painting
 * @package App\Structural\Decorator\Painting;
 */
class Painting implements PaintingInterface
{
    /**
     * @param Car $car
     * @return Car
     */
    public function paint(Car $car)
    {
        return $car;
    }
}