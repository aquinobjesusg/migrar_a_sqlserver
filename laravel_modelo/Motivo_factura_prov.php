<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_factura_prov extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'motivo_factura_prov';

    protected $fillable = ['id_fac_prov','des_concepto','monto','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

