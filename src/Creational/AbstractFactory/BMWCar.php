<?php


namespace App\Creational\AbstractFactory;


class BMWCar implements CarInterface
{
    /**
     * @var float
     */
    private float $price;

    /**
     * BMWCar constructor.
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }


    /**
     * @return mixed
     */
    public function calculatePrice():float
    {
        return $this->getPrice()+($this->getPrice() * 0.2);
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
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }



}