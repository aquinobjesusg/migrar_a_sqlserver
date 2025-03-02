<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = "id";
    protected $fillable = ['created_at','usercreated_at','updated_at','id','userupdated_at','id','name','email','email_verified_at','password','two_factor_secret','two_factor_recovery_codes','remember_token','created_at','updated_at','avatar','role','usercreated_at','userupdated_at','in_medico','in_paciente','activo'];
 
}

