<?php

namespace App\Interfaces;


interface CallbackResponseInterface
{
    /**
     * Возвращает объект запроса, для которого сформирован данный объект ответа
     * @return CallbackRequestInterface
     */
    public function getRequest(): CallbackRequestInterface;
}