<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospitalizacion extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'hospitalizacion';

    protected $fillable = ['nrohistoria','nroconsulta','diagprev','indiprev','dieta','habitacion','hospital','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

