<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
protected $fillable = [
        't_id',
        'u_id',
        'de_id',
        'priority',
        'description',
        'file',
        'status',
        'created_at'
    ];
}
