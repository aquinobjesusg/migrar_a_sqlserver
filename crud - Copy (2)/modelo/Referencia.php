<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    protected $table = 'referencia';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','ceduladoctor','referencia','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

