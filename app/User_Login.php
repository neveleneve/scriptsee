<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Login extends Model
{
    protected $table = 'user_login';
    protected $fillable = [
        'username',
        'password',
    ];
}
