<?php


namespace App\Creational\FactoryMethod;


class BENZBrandFactory implements BrandFactoryInterface
{

    public function BuildBrand()
    {
        return new BENZBrand();
    }
}