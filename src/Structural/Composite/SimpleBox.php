<?php

namespace App\Structural\Composite;
/**
 * Class SimpleBox
 * @package App\Structural\Composite;
 */
class SimpleBox implements ProductInterface
{
    private float $price;

    /**
     * SimpleBox constructor.
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }


    /**
     * @return float
     */
    public function getPrice(): float
    {
        return  $this->price;
    }

    /**
     * @param float $price
     * @return SimpleBox
     */
    public function setPrice(float $price): SimpleBox
    {
        $this->price = $price;
        return $this;
    }
}