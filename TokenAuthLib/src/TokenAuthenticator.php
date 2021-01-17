<?php
namespace TokenAuth;
/**
 * Class TokenAuthenticator
 * @package TokenAuth
 */
class TokenAuthenticator
{
    /**
     * @param string $key
     * @param string $token
     * @return string
     */
    public function tokenLogin(string $key, string $token)
    {
        return base64_encode("{$token}-{$key}");
    }
}