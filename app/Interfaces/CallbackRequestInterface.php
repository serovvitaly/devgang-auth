<?php

namespace App\Interfaces;


interface CallbackRequestInterface
{
    /**
     * Возвращает имя метода
     * @return string
     */
    public function getMethod(): string;

    /**
     * Возвращает ассоциативный массив с параметрами
     * @return array
     */
    public function getParams(): array;
}