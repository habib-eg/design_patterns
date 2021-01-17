<?php
namespace App\Structural\AdapterThirdPartyExample;
/**
 * Interface AuthenticatorInterface
 * @package App\Structural\AdapterThirdPartyExample
 */
interface AuthenticatorInterface
{
    /**
     * @param string[] $params
     * @return mixed
     */
    public function login(array $params);
}