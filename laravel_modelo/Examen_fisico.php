<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen_fisico extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'examen_fisico';

    protected $fillable = ['nrohistoria','nroconsulta','cardiopulmonal','abdomen','extremidades','otros','electrocardiograma','rx_de_torax','laboratorio','riesgo_operatorio','sugerencias','piel_mucosas','orl','cabeza','cuello_tiroides','vascular','neurologico','otro','torax','mucosas','genera','ojo_de','boca_de','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

