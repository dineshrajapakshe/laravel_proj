<?php

namespace App;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model

 
{
   
    protected $fillable = [
        '$id', 'Problem_description',  'user_id', 'ip_address',  'serial_no', 'status','problem_id',
       

        
    ];
    
}
