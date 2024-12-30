<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Products_componentes extends Model
{
    protected $table = 'products_componentes';
    protected $primaryKey = "id";
    protected $fillable = ['id','orden','name_component','created_at','updated_at','produt_id'];
 
}

