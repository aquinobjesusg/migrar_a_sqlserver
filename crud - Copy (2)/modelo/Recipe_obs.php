<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe_obs extends Model
{
    protected $table = 'recipe_obs';
    protected $primaryKey = "id";
    protected $fillable = ['numhistoria','numconsulta','observacion','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

