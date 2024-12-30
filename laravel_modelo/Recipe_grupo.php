<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe_grupo extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'recipe_grupo';

    protected $fillable = ['codigo','tratamiento','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

