<?php
namespace App\Creational\Builder;

use App\Creational\Builder\Models\BENZCar;
use App\Creational\Builder\Models\CarAbstract;

class BENZCarBuilder extends BuilderAbstract implements CarBuilderInterface
{
    /**
     * @return mixed
     */
    public function builderEngine()
    {
        $this->getCarAbstract()->setPart('BN-ENGINE','engine');
    }

    /**
     * @return mixed
     */
    public function builderDoors()
    {
        $this->getCarAbstract()->setPart('BN-DOORS',4);
    }

    /**
     * @return mixed
     */
    public function builderBody()
    {
        $this->getCarAbstract()->setPart('BN-BODY','body');
    }

    /**
     * @return mixed
     */
    public function createCar():CarAbstract
    {
        return $this->setCarAbstract(new BENZCar())->getCarAbstract();
    }

    /**
     * @return mixed
     */
    public function getCar():CarAbstract
    {
        return  $this->getCarAbstract();
    }
}