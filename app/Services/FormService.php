<?php

namespace App\Services;


use Domain\Interfaces\FormEntityInterface;
use Domain\Repositories\FormEntityRepository;

class FormService
{
    public function getFormEntityByMerchantIdAndFormName(int $merchantId, string $formName): FormEntityInterface
    {
        return FormEntityRepository::find($merchantId, $formName);
    }
}