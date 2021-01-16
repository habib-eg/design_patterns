<?php


namespace App\Creational\Prototype;


class AutomaticCarPrototype extends AbstractCarPrototype
{
    protected string $model = "Automatic";

    public function __clone()
    {
        return $this;
    }
}