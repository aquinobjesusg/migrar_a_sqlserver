<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Password_resets extends Model
{
    protected $table = 'password_resets';
    protected $primaryKey = "id";
    protected $fillable = ['id','updated_at','usercreated_at','userupdated_at','created_at','email','token','created_at'];
 
}

