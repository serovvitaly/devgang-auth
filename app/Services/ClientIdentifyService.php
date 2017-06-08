<?php

namespace App\Services;


class ClientIdentifyService
{
    const CID_COOKIE_KEY = '_sf_cid_key';

    /**
     * Возвращает сгенерированный идентификатор клиента
     * @return string
     */
    public function generateClientIdentifier(): string
    {
        return '';
    }
}