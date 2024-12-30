<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Contratos extends Model
{
    protected $table = 'contratos';
    protected $primaryKey = "id";
    protected $fillable = ['id','Nacionalidad_Titular','Cedula_Titular','Nombre_TItular_Beneficiario','Apellido_TItular_Beneficiario','Estado_Civil','Sexo_Titular_Beneficiario','Fecha_Nacimiento_Titular_Beneficiario','Parentesco','Nombre_Agente_Recaudador','Tipo_de_Cuenta','Numero_de_Cuenta','Tipo_de_Vencimiento','Codigo_Empresa','Codigo_Sucursal','Numero_de_Telefono','Correo_Electronico','Codigo_Cia_Seguro','Codigo_Plan_en_SISER','Codigo_Productor_Asesor','Estado','Estado_Observacion'];
 
}

