<?php


namespace App\Creational\FactoryMethod;


class BMWBrandFactory implements BrandFactoryInterface
{

    public function BuildBrand()
    {
        return new BMWBrand();
    }
}