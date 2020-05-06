<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemUser extends Model
{
    protected $fillable = [
            'r_id',
            'name',
            'de_id',
            'email',
            'email_verified_at',
            'password',
            'remember_token',
            'created_at'
        ];
}
