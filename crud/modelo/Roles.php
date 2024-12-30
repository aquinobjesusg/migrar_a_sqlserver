<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $primaryKey = "id";
    protected $fillable = ['id','name_rol','created_at','updated_at'];
 
}

