<?php

namespace App\Structural\Decorator\Painting;
use App\Structural\Decorator\Car;

/**
 * Class PaintingDecorator
 * @package App\Structural\Decorator\Painting;
 */
class PaintingDecorator implements PaintingInterface
{
    private PaintingInterface $painting;

    /**
     * PaintingDecorator constructor.
     * @param PaintingInterface $painting
     */
    public function __construct(PaintingInterface $painting)
    {
        $this->painting = $painting;
    }

    /**
     * @param Car $car
     * @return Car
     */
    public function paint(Car $car)
    {

        if (static::COLOR ?? null) {
            $car->setColor(static::COLOR);
        }
        return $this->getPainting()->paint($car);
    }

    /**
     * @return PaintingInterface
     */
    public function getPainting(): PaintingInterface
    {
        return $this->painting;
    }

    /**
     * @param PaintingInterface $painting
     * @return PaintingDecorator
     */
    public function setPainting(PaintingInterface $painting): PaintingDecorator
    {
        $this->painting = $painting;
        return $this;
    }
}