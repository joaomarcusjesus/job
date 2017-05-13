<?php

namespace Modules\Auth\Entities;

use Cartalyst\Sentinel\Users\EloquentUser as SentinelUser;

class User extends SentinelUser
{
    protected $fillable = [
        'email',
        'password',
        'permissions',
        'last_login',
        'first_name',
        'last_name'
    ];

    protected $hidden = [
        'password'
    ];
}
