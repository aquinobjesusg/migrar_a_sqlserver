<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuesto_planti extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'presupuesto_planti';

    protected $fillable = ['consecutivo','tipo_precio','total_costo','total_final','notas','tipo_doc','nom_presupuesto','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

