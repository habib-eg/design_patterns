<?php
namespace App\Structural\Bridge;
/**
 * Class Car
 * @package App\Structural\Bridge;
 */
abstract class Car
{
    protected CarColor $carColor;

    /**
     * Car constructor.
     * @param CarColor $carColor
     */
    public function __construct(CarColor $carColor)
    {
        $this->carColor = $carColor;
    }

    abstract public function getProduct();

    /**
     * @return CarColor
     */
    public function getCarColor(): CarColor
    {
        return $this->carColor;
    }

    /**
     * @param CarColor $carColor
     * @return Car
     */
    public function setCarColor(CarColor $carColor): Car
    {
        $this->carColor = $carColor;
        return $this;
    }
}