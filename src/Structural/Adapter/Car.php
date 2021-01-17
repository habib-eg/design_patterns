<?php

namespace App\Structural\Adapter;
/**
 * Class Car
 * @package App\Structural\Adapter;
 */
class Car
{
    private EngineInterface  $engine;

    /**
     * Car constructor.
     * @param EngineInterface $engine
     */
    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return bool
     */
    public function start()
    {
        return $this->engine->startEngine();
    }

    /**
     * @return EngineInterface
     */
    public function getEngine(): EngineInterface
    {
        return $this->engine;
    }

    /**
     * @param EngineInterface $engine
     * @return Car
     */
    public function setEngine(EngineInterface $engine): Car
    {
        $this->engine = $engine;
        return $this;
    }
}