<?php

namespace App\Structural\Bridge;
/**
 * Class BMWCar
 * @package App\Structural\Bridge;
 */
class BMWCar extends Car
{
    public function getProduct()
    {
        return sprintf('this car type is %s and the car color is %s','BMW',$this->carColor->getColor());
    }
}