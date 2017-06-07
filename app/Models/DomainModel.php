<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DomainModel extends Model
{
    protected $table = 'domains';

    public static function findByUid($uid)
    {
        return self::where(['uid' => $uid])->take(1)->first();
    }
}
