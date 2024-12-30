<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen_pacientes extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'imagen_pacientes';

    protected $fillable = ['nrohistoria','imagen','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

