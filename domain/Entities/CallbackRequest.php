<?php

namespace Domain\Entities;


use App\Interfaces\CallbackRequestInterface;

class CallbackRequest implements CallbackRequestInterface
{
    protected $name;

    protected $params = [];

    public function __construct(string $name, array $params = [])
    {
        $this->name = trim($name);
        $this->params = $params;
    }

    /**
     * Возвращает имя метода
     * @return string
     */
    public function getMethod(): string
    {
        return $this->name;
    }

    /**
     * Возвращает ассоциативный массив с параметрами
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
}