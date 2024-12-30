<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gsistema extends Model
{
    protected $table = 'gsistema';
    protected $primaryKey = "id";
    protected $fillable = ['id_medico','nomcorto','clave','ulthisto','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

