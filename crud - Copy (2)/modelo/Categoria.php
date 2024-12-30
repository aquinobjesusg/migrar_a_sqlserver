<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = "id";
    protected $fillable = ['codigo','categoria','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

