<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Afiliados extends Model
{
    protected $table = 'afiliados';
    protected $primaryKey = "id";
    protected $fillable = ['id','code_afiliado','name_afiliado','dineccion_afiliado','telefono_afiliado','celular_afiliado','email_afiliado','empresa_id','created_at','updated_at','rif_afiliado','domicilio_fiscal','telefono_fiscal'];
 
}

