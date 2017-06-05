<?php

namespace Domain\Interfaces;


interface FormEntityInterface
{
    /**
     * @return string
     */
    public function render(): string;
}