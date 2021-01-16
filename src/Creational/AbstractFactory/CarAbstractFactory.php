<?php


namespace App\Creational\AbstractFactory;


class CarAbstractFactory
{
    private float $tax = 0.3;
    private float $price;

    /**
     * CarAbstractFactory constructor.
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /**
     * @return BMWCar
     */
    public function createBMWCar(): BMWCar
    {
        return new BMWCar($this->getPrice());
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
     * @return CarAbstractFactory
     */
    public function setPrice(float $price): CarAbstractFactory
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return BenzCar
     */
    public function createBenzCar(): BenzCar
    {
        return new BenzCar($this->getPrice(), $this->getTax());
    }

    /**
     * @return float|int
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param float|int $tax
     * @return CarAbstractFactory
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
        return $this;
    }

}