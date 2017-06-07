<?php

namespace App\Models;


class OwnerModel extends \App\User
{
    protected $table = 'users';

    public static function findByUid($uid)
    {
        

        return self::where(['uid' => $uid])->first();
    }
}
