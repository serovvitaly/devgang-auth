<?php

namespace App\Interfaces;


interface CallbackServiceInterface
{
    /**
     * Производит вызов метода, переданного в запросе
     * @param CallbackRequestInterface $request
     * @return CallbackResponseInterface
     */
    public function call(CallbackRequestInterface $request): CallbackResponseInterface;
}