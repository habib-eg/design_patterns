<?php

namespace App\Structural\Decorator\Painting;
use App\Structural\Decorator\Car;

/**
 * Interface PaintingInterface
 * @package App\Structural\Decorator\Painting
 */
interface PaintingInterface
{
    /**
     * @param Car $car
     * @return Car
     */
    public function paint(Car $car);
}