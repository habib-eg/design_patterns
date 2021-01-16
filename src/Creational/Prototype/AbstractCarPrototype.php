<?php


namespace App\Creational\Prototype;


abstract class AbstractCarPrototype
{
    /**
     * @var string
     */
    protected string $model;
    /**
     * @var string|null
     */
    private ?string $flag;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return AbstractCarPrototype
     */
    public function setModel(string $model): AbstractCarPrototype
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlag(): string
    {
        return $this->flag;
    }

    /**
     * @param string $flag
     * @return AbstractCarPrototype
     */
    public function setFlag(string $flag): AbstractCarPrototype
    {
        $this->flag = $flag;
        return $this;
    }
}