<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table = 'representante';
    protected $primaryKey = "id";
    protected $fillable = ['numhistoria','nombre','codeparentesco','direccion','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

