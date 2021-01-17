<?php

namespace Tests;
use App\Structural\AdapterThirdPartyExample\BasicAuthAdapter;
use App\Structural\AdapterThirdPartyExample\TokenAuthAdapter;
use App\Structural\AdapterThirdPartyExample\UserLogin;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterThirdPartyExampleTest
 * @package Tests;
 */
class AdapterThirdPartyExampleTest extends TestCase
{
    /* @test */
    public function testCanAuthWithBasicAuhLib()
    {
        $loginData = [
            "username"=>"test",
            "password"=>"123456789+"
        ];
        $basicAuthAdaptor = $this->createMock(BasicAuthAdapter::class);
        $basicAuthAdaptor->expects($this->once())->method('login')->willReturn("{$loginData['username']}-{$loginData['password']}");
        $userLogin = new UserLogin( $basicAuthAdaptor );
        $userLogin->login($loginData);
    }
    /* @test */
    public function testCanAuthWithTokenAuhLib()
    {
        $loginData = [
            "token"=>"habib",
            "key"=>"own-key"
        ];
        $basicAuthAdaptor = $this->createMock(TokenAuthAdapter::class);
        $basicAuthAdaptor->expects($this->once())->method('login')->willReturn(base64_encode("{$loginData['username']}-{$loginData['password']}"));
        $userLogin = new UserLogin( $basicAuthAdaptor );
        $userLogin->login($loginData);
    }
}