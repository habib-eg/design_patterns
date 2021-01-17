<?php
namespace App\Structural\Adapter;
/**
 * Class NormalEngine
 * @package App\Structural\Adapter
 */
class NormalEngine implements EngineInterface
{

    /**
     * @inheritDoc
     */
    public function startEngine(): bool
    {
        return true;
    }
}