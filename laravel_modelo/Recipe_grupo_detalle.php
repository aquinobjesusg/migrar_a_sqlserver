<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe_grupo_detalle extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'recipe_grupo_detalle';

    protected $fillable = ['codigo','codemedicina','descripcion','indicaciones','cantidad','orden','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

