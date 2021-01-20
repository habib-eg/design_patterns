<?php

namespace App\Structural\Decorator;
/**
 * Class Car
 * @package App\Structural\Decorator;
 */
class Car
{
    private string $color='';

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color
     * @return Car
     */
    public function setColor(?string $color): Car
    {
        $this->color .= $color;
        return $this;
    }
}