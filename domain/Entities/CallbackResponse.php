<?php

namespace Domain\Entities;


use App\Interfaces\CallbackRequestInterface;
use App\Interfaces\CallbackResponseInterface;

class CallbackResponse implements CallbackResponseInterface
{
    protected $request;

    public function __construct(CallbackRequestInterface $request)
    {
        $this->request = $request;
    }

    /**
     * Возвращает объект запроса, для которого сформирован данный объект ответа
     * @return CallbackRequestInterface
     */
    public function getRequest(): CallbackRequestInterface
    {
        return $this->request;
    }

    /**
     * Возвращает статус ответа (true|false)
     * @return bool
     */
    public function isSuccess(): bool
    {
        return false;
    }
}