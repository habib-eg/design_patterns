<?php

namespace App\Structural\AdapterThirdPartyExample;
use TokenAuth\TokenAuthenticator;

/**
 * Class TokenAuthAdapter
 * @package App\Structural\AdapterThirdPartyExample;
 */
class TokenAuthAdapter implements AuthenticatorInterface
{
    private TokenAuthenticator $authenticator;

    /**
     * TokenAuthAdapter constructor.
     * @param TokenAuthenticator $authenticator
     */
    public function __construct(TokenAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    /**
     * @param string[] $params
     * @return mixed
     */
    public function login(array $params)
    {
        return $this->authenticator->tokenLogin($params['token'],$params['key']);
    }
}