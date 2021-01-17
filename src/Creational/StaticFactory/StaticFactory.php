<?php
namespace App\Creational\StaticFactory;

/**
 * Class StaticFactory
 * @package App\Creational\StaticFactory
 */
class StaticFactory
{
    /**
     * @param string $type
     * @return BENZCar|BMWCar|null
     */
    public static function factory(string $type)
    {
        return $type=="BMW" ? new BMWCar() : ($type=="BENZ" ? new BENZCar() : null);
    }
}