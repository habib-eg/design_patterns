<?php
namespace App\Structural\Adapter;
/**
 * Class TurboEngine
 * @package App\Structural\Adapter;
 */
class TurboEngine implements TurboInterface
{
    /**
     * @return bool
     */
    public function startTurbo(): bool
    {
        return true;
    }
}