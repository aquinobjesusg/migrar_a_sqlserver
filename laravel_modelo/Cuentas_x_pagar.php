<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuentas_x_pagar extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'cuentas_x_pagar';

    protected $fillable = ['nro_cxp','origen_cxp','fec_cxp','edo_cxp','tipo_cxp','conc_cxp','cxp_codigo','cxp_descripcion','fec_docum','cxp_nro_control','cxp_nro_factura','cxp_referencia','cxp_mto_neto','cxp_ret_isrl','cxp_m_ret_isrl','cxp_iva','cxp_mto_iva','cxp_mto_total','cxp_ret_iva','cxp_m_ret_iva','cxp_mto_total_pagar','cxp_saldo_a_pagar','cxp_chekear','cxp_forma','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

