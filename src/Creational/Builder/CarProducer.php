<?php


namespace App\Creational\Builder;


use App\Creational\Builder\Models\CarAbstract;

class CarProducer
{

    private CarBuilderInterface $builder;

    /**
     * CarProducer constructor.
     * @param CarBuilderInterface $builder
     */
    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @return CarBuilderInterface
     */
    public function getBuilder(): CarBuilderInterface
    {
        return $this->builder;
    }

    /**
     * @param CarBuilderInterface $builder
     * @return self
     */
    public function setBuilder(CarBuilderInterface $builder): self
    {
        $this->builder = $builder;
        return $this;
    }

    /**
     * @return CarAbstract
     */
    public function producer():CarAbstract
    {
        $this->builder->createCar();
        $this->builder->builderBody();
        $this->builder->builderEngine();
        $this->builder->builderDoors();

        return $this->builder->getCar();
    }
}