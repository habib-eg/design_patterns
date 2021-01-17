<?php
namespace App\Structural\Adapter;

/**
 * Interface EngineInterface
 * @package App\Structural\Adapter
 */
interface EngineInterface
{
    /**
     * @return bool
     */
    public function startEngine():bool;
}