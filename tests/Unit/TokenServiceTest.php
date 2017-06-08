<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TokenServiceTest extends TestCase
{
    /** @var \App\Services\TokenService */
    protected $tokenService;

    protected function setUp()
    {
        $this->tokenService = new \App\Services\TokenService;

        parent::setUp();
    }

    /**
     * Тест генерации токена
     */
    public function testGenerateToken()
    {
        $token = $this->tokenService->generateToken();
        $this->assertRegExp('/^[a-z0-9]{13}\-[a-z0-9]{13}\-[a-z0-9]{13}$/', $token);
    }

    /**
     * Тест шифрования токена
     */
    public function testEncryptToken()
    {
        $token = $this->tokenService->generateToken();
        $encryptingToken = $this->tokenService->encryptToken($token);
        $this->assertRegExp('/^[a-zA-Z0-9=]{276}$/', $encryptingToken);
    }

    /**
     * Тест дешифрования токена
     */
    public function testDecryptToken()
    {
        $token = $this->tokenService->generateToken();
        $encryptingToken = $this->tokenService->encryptToken($token);
        $decryptingToken = $this->tokenService->decryptToken($encryptingToken);
        $this->assertEquals($token, $decryptingToken);
    }
}
