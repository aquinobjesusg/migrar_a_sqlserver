<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $primaryKey = "id";
    protected $fillable = ['usercreated_at','id','updated_at','created_at','userupdated_at','id','name','created_at','updated_at','usercreated_at','userupdated_at','activo'];
 
}

