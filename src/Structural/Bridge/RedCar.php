<?php

namespace App\Structural\Bridge;
/**
 * Class RedCar
 * @package App\Structural\Bridge;
 */
class RedCar implements \App\Structural\Bridge\CarColor
{
    /**
     * @return string
     */
    public function getColor():string
    {
        return 'Red';
    }
}