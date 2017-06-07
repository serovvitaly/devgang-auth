<?php

namespace Domain\Repositories;


use Domain\Entities\FormEntity;
use Domain\Interfaces\FormEntityInterface;
use Domain\Interfaces\FormEntityRepositoryInterface;

class FormEntityRepository implements FormEntityRepositoryInterface
{
    /**
     * @param string $domainUid
     * @param string $formName
     * @return FormEntityInterface
     */
    public static function find(string $domainUid, string $formName): FormEntityInterface
    {
        return new FormEntity($domainUid, $formName);
    }
}