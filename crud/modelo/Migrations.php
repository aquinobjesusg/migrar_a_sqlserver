<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Migrations extends Model
{
    protected $table = 'migrations';
    protected $primaryKey = "id";
    protected $fillable = ['id','migration','batch'];
 
}

