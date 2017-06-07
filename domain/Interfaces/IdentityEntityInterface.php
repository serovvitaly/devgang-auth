<?php

namespace Domain\Interfaces;


interface IdentityEntityInterface
{
    /**
     * Возвращает идентификатор сущности
     * @return int
     */
    public function getId(): int;
}