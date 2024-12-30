<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $table = 'recipes';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','codemedicina','indicaciones','cantidad','orden','descripcion','fecha','recipe','comple','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

