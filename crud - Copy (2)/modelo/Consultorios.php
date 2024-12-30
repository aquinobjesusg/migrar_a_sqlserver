<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultorios extends Model
{
    protected $table = 'consultorios';
    protected $primaryKey = "id";
    protected $fillable = ['codigo','consultorio','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

