<?php
namespace App\Creational\Builder;

use App\Creational\Builder\Models\CarAbstract;

/**
 * Class BuilderAbstract
 * @package App\Creational\Builder
 */
class BuilderAbstract
{
    protected CarAbstract  $carAbstract;

    /**
     * @return CarAbstract
     */
    public function getCarAbstract(): CarAbstract
    {
        return $this->carAbstract;
    }

    /**
     * @param CarAbstract $carAbstract
     * @return BuilderAbstract
     */
    public function setCarAbstract(CarAbstract $carAbstract): BuilderAbstract
    {
        $this->carAbstract = $carAbstract;
        return $this;
    }


}