<?php
namespace App\Creational\SimpleFactory;

/**
 * Class Car
 * @package App\Creational\SimpleFactory
 */
class Car
{
    private string $type;

    /**
     * Car constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }


}