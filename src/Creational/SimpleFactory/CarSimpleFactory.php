<?php
namespace App\Creational\SimpleFactory;

/**
 * Class CarSimpleFactory
 * @package App\Creational\SimpleFactory
 */
class CarSimpleFactory
{
    /**
     * @param string $type
     * @return Car
     */
    public function createCar(string $type)
    {
        return new Car($type);
    }

}