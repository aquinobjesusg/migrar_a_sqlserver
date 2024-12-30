<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_factura extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'motivo_factura';

    protected $fillable = ['codigo','descripcion','monto','monto_seg','tipo','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

