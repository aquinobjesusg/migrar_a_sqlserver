<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Products_pack extends Model
{
    protected $table = 'products_pack';
    protected $primaryKey = "id";
    protected $fillable = ['id','name_pack','pack_price','created_at','updated_at','sucursal_id'];
 
}

