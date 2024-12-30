<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';
    protected $primaryKey = "id";
    protected $fillable = ['id','name','created_at','updated_at'];
 
}

