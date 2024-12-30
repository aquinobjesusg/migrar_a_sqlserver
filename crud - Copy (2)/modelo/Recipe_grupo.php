<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe_grupo extends Model
{
    protected $table = 'recipe_grupo';
    protected $primaryKey = "id";
    protected $fillable = ['codigo','tratamiento','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

