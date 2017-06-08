<?php

namespace App\Services;


use App\Interfaces\CallbackRequestInterface;
use App\Interfaces\CallbackResponseInterface;
use App\Interfaces\CallbackServiceInterface;

class CallbackService implements CallbackServiceInterface
{
    /**
     * Производит вызов метода, переданного в запросе
     * @param CallbackRequestInterface $request
     * @return CallbackResponseInterface
     */
    public function call(CallbackRequestInterface $request): CallbackResponseInterface
    {
        // TODO: Implement call() method.
    }
}