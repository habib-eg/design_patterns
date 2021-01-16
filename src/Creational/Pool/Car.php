<?php
namespace App\Creational\Pool;

use \DateTime;
class Car
{
    private DateTime $rentAt;

    /**
     * Car constructor.
     */
    public function __construct()
    {
        $this->rentAt = new DateTime();
    }

    public function moveCar()
    {
        return "car is moving ";
    }

}