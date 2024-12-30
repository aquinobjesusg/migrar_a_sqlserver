<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Products_contornos extends Model
{
    protected $table = 'products_contornos';
    protected $primaryKey = "id";
    protected $fillable = ['id','orden','name_contorno','created_at','updated_at','sucursal_id'];
 
}

