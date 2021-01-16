<?php


namespace App\Creational\Prototype;


class ManualCarPrototype extends AbstractCarPrototype
{
    protected string $model ="Manual";

    public function __clone()
    {
        return $this;
    }
}