<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OwnerModel extends Model
{
    public static function findByUid($uid)
    {
        return self::where(['uid' => $uid])->one();
    }
}
