<?php

namespace Domain\Repositories;


use Domain\Entities\FormEntity;
use Domain\Interfaces\FormEntityInterface;
use Domain\Interfaces\FormEntityRepositoryInterface;

class FormEntityRepository implements FormEntityRepositoryInterface
{
    /**
     * @param int $merchantId
     * @param string $formName
     * @return FormEntityInterface
     */
    public static function find(int $merchantId, string $formName): FormEntityInterface
    {
        return new FormEntity($merchantId, $formName);
    }
}