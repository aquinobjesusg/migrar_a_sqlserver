<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Sub_categories extends Model
{
    protected $table = 'sub_categories';
    protected $primaryKey = "id";
    protected $fillable = ['id','name','created_at','updated_at','categoria_id'];
 
}

