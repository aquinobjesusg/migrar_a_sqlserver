<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_diagno extends Model
{
    protected $table = 'p_diagno';
    protected $primaryKey = "id";
    protected $fillable = ['codiagn','descrip','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

