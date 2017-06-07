<?php

namespace App\Models;


class OwnerModel extends \App\User
{
    public static function findByUid($uid)
    {
        return self::where(['uid' => $uid])->one();
    }
}
