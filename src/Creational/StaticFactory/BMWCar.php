<?php


namespace App\Creational\StaticFactory;


class BMWCar implements CarInterface
{
    /**
     * @return string
     */
    public function model():string
    {
        return  "BMW";
    }
}