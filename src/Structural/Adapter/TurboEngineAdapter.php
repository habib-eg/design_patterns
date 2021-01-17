<?php

namespace App\Structural\Adapter;
/**
 * Class TurboEngineAdapter
 * @package App\Structural\Adapter;
 */
class TurboEngineAdapter implements EngineInterface
{
    private TurboEngine $engine;

    /**
     * TurboEngineAdapter constructor.
     * @param TurboEngine $engine
     */
    public function __construct(TurboEngine $engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return bool
     */
    public function startEngine(): bool
    {
        return  $this->engine->startTurbo();
    }

    /**
     * @return TurboEngine
     */
    public function getEngine(): TurboEngine
    {
        return $this->engine;
    }

    /**
     * @param TurboEngine $engine
     * @return TurboEngineAdapter
     */
    public function setEngine(TurboEngine $engine): TurboEngineAdapter
    {
        $this->engine = $engine;
        return $this;
    }
}