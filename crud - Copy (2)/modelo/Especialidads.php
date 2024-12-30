<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidads extends Model
{
    protected $table = 'especialidads';
    protected $primaryKey = "id";
    protected $fillable = ['created_at','id','updated_at','usercreated_at','userupdated_at','id','name','created_at','updated_at'];
 
}

