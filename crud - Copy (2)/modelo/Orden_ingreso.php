<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden_ingreso extends Model
{
    protected $table = 'orden_ingreso';
    protected $primaryKey = "id";
    protected $fillable = ['historia','consulta','fecha_operacion','fecha_reporte','texto','idx','reco_ingresar','reco_depi','reco_llevar','reco_cedroxin','reco_ejercicios','reco_terapia','reco_control','reco_higiene','reco_ropa','reco_tomar','reco_clexane','reco_ejercicios_res','reco_sangre','reco_avisar','detalle','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

