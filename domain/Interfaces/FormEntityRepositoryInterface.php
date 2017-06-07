<?php

namespace Domain\Interfaces;


interface FormEntityRepositoryInterface
{
    /**
     * @param string $domainUid
     * @param string $formName
     * @return FormEntityInterface
     */
    public static function find(string $domainUid, string $formName): FormEntityInterface;
}