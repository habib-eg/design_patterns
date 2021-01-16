<?php


namespace App\Creational\Builder\Models;


class CarAbstract
{
    private array $data= [];

    /**
     * @param $name
     * @param $value
     * @return $this
     */
    public function setPart($name,$value)
    {
        $this->data[$name]=$value;

        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }
}