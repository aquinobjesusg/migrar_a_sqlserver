<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Password_resets extends Model
{
    protected $table = 'password_resets';
    protected $primaryKey = "id";
    protected $fillable = ['email','token','created_at'];
 
}

