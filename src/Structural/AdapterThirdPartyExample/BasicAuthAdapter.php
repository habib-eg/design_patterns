<?php

namespace App\Structural\AdapterThirdPartyExample;
use BasicAuth\BasicAuthenticator;

/**
 * Class BasicAuthAdapter
 * @package App\Structural\AdapterThirdPartyExample;
 */
class BasicAuthAdapter implements AuthenticatorInterface
{
    private BasicAuthenticator $authenticator;

    /**
     * BasicAuthAdapter constructor.
     * @param BasicAuthenticator $authenticator
     */
    public function __construct(BasicAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    /**
     * @param string[] $params
     * @return mixed
     */
    public function login(array $params)
    {
        return $this->authenticator->basicLogin($params['username'],$params['password']);
    }
}