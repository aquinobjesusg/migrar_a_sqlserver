<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppacient extends Model
{
    protected $table = 'ppacient';
    protected $primaryKey = "id";
    protected $fillable = ['cedula','apellidos','nombres','sexo','fnacimient','telefono','codesegemp','nhistoria','ultconsu','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

