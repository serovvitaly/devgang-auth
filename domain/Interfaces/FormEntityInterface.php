<?php

namespace Domain\Interfaces;


use ArrayIterator;

interface FormEntityInterface
{
    public function getDataView(): ArrayIterator;

    /**
     * @return string
     */
    public function render(): string;
}