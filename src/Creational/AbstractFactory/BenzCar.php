<?php


namespace App\Creational\AbstractFactory;


class BenzCar implements CarInterface
{
    private float $price;
    private float $tax;

    /**
     * BenzCar constructor.
     * @param float $price
     * @param float $tax
     */
    public function __construct(float $price, float $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }


    /**
     * @return float
     */
    public function calculatePrice():float
    {
        return  $this->getPrice() + ($this->getPrice() * $this->getTax());
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return BenzCar
     */
    public function setPrice(float $price): BenzCar
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     * @return BenzCar
     */
    public function setTax(float $tax): BenzCar
    {
        $this->tax = $tax;
        return $this;
    }
}