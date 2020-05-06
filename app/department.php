<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
            'de_id',
            'name',
            'remark',
            'created_at',
        ];
}
