<?php


namespace App\Creational\StaticFactory;


class BENZCar implements CarInterface
{

    /**
     * @return string
     */
    public function model():string
    {
       return  "BENZ";
    }
}