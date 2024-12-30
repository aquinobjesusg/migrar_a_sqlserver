<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = "id";
    protected $fillable = ['id','name','email','email_verified_at','password','two_factor_secret','two_factor_recovery_codes','remember_token','created_at','updated_at','avatar','role','afiliado_id','role_id','sucursal_id','empresa_id','tipo_usuario','delivery_id'];
 
}

