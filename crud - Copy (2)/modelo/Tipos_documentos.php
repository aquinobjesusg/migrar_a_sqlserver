<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos_documentos extends Model
{
    protected $table = 'tipos_documentos';
    protected $primaryKey = "id";
    protected $fillable = ['tip_documento','des_documento','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

