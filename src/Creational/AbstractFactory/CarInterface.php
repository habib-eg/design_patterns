<?php
namespace App\Creational\AbstractFactory;

/**
 * Interface CarInterface
 * @package App\Creational\AbstractFactory
 */
interface CarInterface
{
    /**
     * @return float
     */
    public function calculatePrice():float;
}