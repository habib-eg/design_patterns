<?php
namespace BasicAuth;

/**
 * Class BasicAuthenticator
 * @package BasicAuth
 */
class BasicAuthenticator
{
    /**
     * @param string $username
     * @param string $password
     * @return string
     */
    public function basicLogin(string $username, string $password)
    {
        return "{$username}-{$password}";
    }
}