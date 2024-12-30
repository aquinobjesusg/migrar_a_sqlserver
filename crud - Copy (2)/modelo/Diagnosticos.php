<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosticos extends Model
{
    protected $table = 'diagnosticos';
    protected $primaryKey = "id";
    protected $fillable = ['codediagnostico','descripcion','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

