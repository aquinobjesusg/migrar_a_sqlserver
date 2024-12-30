<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe_detalle extends Model
{
    protected $table = 'recipe_detalle';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','recipe','fe_emision','fe_vence','nota','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

