<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen_fisico extends Model
{
    protected $table = 'examen_fisico';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','cardiopulmonal','abdomen','extremidades','otros','electrocardiograma','rx_de_torax','laboratorio','riesgo_operatorio','sugerencias','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

