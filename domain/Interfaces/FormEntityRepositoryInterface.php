<?php

namespace Domain\Interfaces;


interface FormEntityRepositoryInterface
{
    /**
     * @param int $domainUid
     * @param string $formName
     * @return FormEntityInterface
     */
    public static function find(int $domainUid, string $formName): FormEntityInterface;
}