<?php

namespace Domain\Interfaces;


interface FormServiceInterface
{
    public function obtainForm($domainUid, $formName);
}