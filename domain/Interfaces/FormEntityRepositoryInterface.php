<?php

namespace Domain\Interfaces;


interface FormEntityRepositoryInterface
{
    /**
     * @param int $merchantId
     * @param string $formName
     * @return FormEntityInterface
     */
    public static function find(int $merchantId, string $formName): FormEntityInterface;
}