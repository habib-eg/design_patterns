<?php

namespace App\Structural\AdapterThirdPartyExample;

/**
 * Class UserLogin
 * @package App\Structural\AdapterThirdPartyExample;
 */
class UserLogin
{
    /**
     * @var AuthenticatorInterface
     */
    private AuthenticatorInterface $authenticator;

    /**
     * UserLogin constructor.
     * @param AuthenticatorInterface $authenticator
     */
    public function __construct(AuthenticatorInterface $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    /**
     * @param string[] $params
     * @return string
     */
    public function login(array $params)
    {
        return $this->authenticator->login($params);
    }
}