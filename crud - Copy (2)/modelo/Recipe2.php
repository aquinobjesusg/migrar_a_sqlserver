<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe2 extends Model
{
    protected $table = 'recipe2';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','codemedicina','indicaciones','cantidad','descripcion','orden','fecha','recipe','comple','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

