<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listado extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'listado';

    protected $fillable = ['tipo','descripcion_tipo','segundo','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

