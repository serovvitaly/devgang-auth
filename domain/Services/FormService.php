<?php

namespace Domain\Services;


use Domain\Interfaces\FormEntityInterface;
use Domain\Interfaces\FormServiceInterface;

class FormService implements FormServiceInterface
{
    public function renderForm(FormEntityInterface $formEntity):string
    {
        return $formEntity->render();
    }

    public function obtainForm($domainUid, $formName)
    {
        //
    }
}