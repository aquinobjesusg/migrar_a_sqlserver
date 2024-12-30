<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipes_copy extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'recipes_copy';

    protected $fillable = ['nrohistoria','nroconsulta','codemedicina','indicaciones','cantidad','descripcion','orden','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

