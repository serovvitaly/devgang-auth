<?php

namespace Domain\Interfaces;


interface FormEntityRepositoryInterface
{
    /**
     * @param int $ownerUid
     * @param string $formName
     * @return FormEntityInterface
     */
    public static function find(int $ownerUid, string $formName): FormEntityInterface;
}