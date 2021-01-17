<?php

namespace App\Structural\Bridge;
/**
 * Class BlueCar
 * @package App\Structural\Bridge;
 */
class BlueCar implements CarColor
{
    /**
     * @return string
     */
    public function getColor():string
    {
        return 'Blue';
    }
}