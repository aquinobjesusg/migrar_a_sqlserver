<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sysopciones extends Model
{
    protected $table = 'sysopciones';
    protected $primaryKey = "id";
    protected $fillable = ['updated_at','usercreated_at','userupdated_at','id','created_at','id','sistema_id','caso','contexto','modulo','menu','submenu','ordernum','ruta','icon','activo','title','imagen','created_at','updated_at','role'];
 
}

