<?php

namespace App\Structural\Bridge;
/**
 * Class BENZCar
 * @package App\Structural\Bridge;
 */
class BENZCar extends Car
{

    public function getProduct()
    {
        return sprintf('this car type is %s and the car color is %s','BENZ',$this->carColor->getColor());
    }
}