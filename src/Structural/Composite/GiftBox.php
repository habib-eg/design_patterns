<?php

namespace App\Structural\Composite;
/**
 * Class GiftBox
 * @package App\Structural\Composite;
 */
class GiftBox implements ProductInterface,GiftInterface
{
    /**
     * @var float
     */
    private float $price;
    /**
     * @var float
     */
    private float $giftPrice;

    /**
     * GiftBox constructor.
     * @param float $price
     * @param float $giftPrice
     */
    public function __construct(float $price, float $giftPrice)
    {
        $this->price = $price;
        $this->giftPrice = $giftPrice;
    }


    /**
     * @return float
     */
    public function giftPackagePrice(): float
    {
        return $this->getGiftPrice();
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->giftPackagePrice() + $this->price;
    }

    /**
     * @return float
     */
    public function getGiftPrice(): float
    {
        return $this->giftPrice;
    }

    /**
     * @param float $giftPrice
     * @return self
     */
    public function setGiftPrice(float $giftPrice): self
    {
        $this->giftPrice = $giftPrice;
        return $this;
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