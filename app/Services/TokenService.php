<?php

namespace App\Services;


class TokenService
{
    /**
     * Возвращает сгенерированный токен
     * @return string
     */
    public function generateToken(): string
    {
        $token = uniqid() . '-' . uniqid() . '-' . uniqid();
        return $token;
    }

    /**
     * Возвращает зашифрованный токен
     * @param string $originalToken
     * @return string
     */
    public function encryptToken(string $originalToken): string
    {
        return encrypt($originalToken);
    }

    /**
     * Возвращает дешифрованный токен
     * @param string $encryptingToken
     * @return string
     */
    public function decryptToken(string $encryptingToken): string
    {
        return decrypt($encryptingToken);
    }
}