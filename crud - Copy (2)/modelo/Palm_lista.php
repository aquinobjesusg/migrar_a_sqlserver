<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palm_lista extends Model
{
    protected $table = 'palm_lista';
    protected $primaryKey = "id";
    protected $fillable = ['id_codigo','nombre_tabla','ordinal','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

