<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospitalizacion extends Model
{
    protected $table = 'hospitalizacion';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','diagprev','indiprev','dieta','habitacion','hospital','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

