<?php


namespace App\Creational\FactoryMethod;

/**
 * Class BMWBrand
 * @package App\Creational\FactoryMethod
 */
class BMWBrand implements CarBrandInterface
{

    /**
     * @return mixed
     */
    public function createBrand()
    {
        return "BMW";
    }
}