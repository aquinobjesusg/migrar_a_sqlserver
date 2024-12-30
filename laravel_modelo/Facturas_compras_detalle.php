<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facturas_compras_detalle extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'facturas_compras_detalle';

    protected $fillable = ['id_registro','id_fac_prov','des_concepto','cantidad','monto','monto_total','id_factura_compra','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

