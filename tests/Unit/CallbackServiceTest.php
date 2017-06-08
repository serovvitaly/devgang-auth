<?php

namespace Tests\Unit;

use Domain\Entities\CallbackRequest;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CallbackServiceTest extends TestCase
{
    /** @var \App\Interfaces\CallbackServiceInterface */
    protected $callbackService;

    protected function setUp()
    {
        $this->callbackService = new \App\Services\CallbackService;

        parent::setUp();
    }

    /**
     * Тест удачной авторизации
     */
    public function testCallAuthSuccessTrue()
    {
        $request = new CallbackRequest('auth', [
            'login' => 'test@test.ru',
            'password' => '123456'
        ]);
        $response = $this->callbackService->call($request);
        $this->assertTrue($response->isSuccess());
    }

    /**
     * Тест неудачной авторизации
     */
    public function testCallAuthSuccessFalse()
    {
        $request = new CallbackRequest('auth', [
            'login' => 'test@test.ru',
            'password' => '123'
        ]);
        $response = $this->callbackService->call($request);
        $this->assertFalse($response->isSuccess());
    }

    /**
     * Тест удачной регистрации
     */
    public function testCallRegSuccessTrue()
    {
        $request = new CallbackRequest('reg', [
            'login' => 'test@test.ru',
            'password' => '123456'
        ]);
        $response = $this->callbackService->call($request);
        $this->assertTrue($response->isSuccess());
    }
}
