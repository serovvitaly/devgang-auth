<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TokenModel extends Model
{
    const TABLE_NAME = 'tokens';

    protected $table = self::TABLE_NAME;

    public static function findByToken(string $token)
    {
        $result = self::where('token', trim($token))->take(1);
        if ($result) {
            return $result->first();
        }
    }
}
