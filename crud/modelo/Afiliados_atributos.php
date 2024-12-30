<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Afiliados_atributos extends Model
{
    protected $table = 'afiliados_atributos';
    protected $primaryKey = "id";
    protected $fillable = ['id','afiliado_id','logo_principal','imagen_1','imagen_2','imagen_3','imagen_4','imagen_5','color_1','color_2','color_3','color_4','color_5','baner_1','baner_2','baner_3','baner_4','baner_5','created_at','updated_at'];
 
}

