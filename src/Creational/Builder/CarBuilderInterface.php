<?php
namespace App\Creational\Builder;

use App\Creational\Builder\Models\CarAbstract;

/**
 * Interface CarBuilderInterface
 * @package App\Creational\Builder
 */
interface CarBuilderInterface
{

    public function builderEngine();
    public function builderDoors();
    public function builderBody();
    public function createCar():CarAbstract;
    public function getCar():CarAbstract;

}