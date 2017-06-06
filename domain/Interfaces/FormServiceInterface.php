<?php

namespace Domain\Interfaces;


interface FormServiceInterface
{
    public function obtainForm($ownerUid, $formName);
}