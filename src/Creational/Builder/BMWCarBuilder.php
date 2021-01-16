<?php


namespace App\Creational\Builder;


use App\Creational\Builder\Models\BMWCar;
use App\Creational\Builder\Models\CarAbstract;

class BMWCarBuilder extends BuilderAbstract implements CarBuilderInterface
{
    /**
     * @return mixed
     */
    public function builderEngine()
    {
        $this->getCarAbstract()->setPart('BMW-ENGINE','engine');
    }

    /**
     * @return mixed
     */
    public function builderDoors()
    {
        $this->getCarAbstract()->setPart('BMW-DOORS',4);
    }

    /**
     * @return mixed
     */
    public function builderBody()
    {
        $this->getCarAbstract()->setPart('BMW-BODY','body');
    }

    /**
     * @return mixed
     */
    public function createCar():CarAbstract
    {
        return $this->setCarAbstract(new BMWCar())->getCarAbstract();
    }

    /**
     * @return mixed
     */
    public function getCar():CarAbstract
    {
        return  $this->getCarAbstract();
    }
}