<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos_conceptos extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'tipos_conceptos';

    protected $fillable = ['id_tipo_concepto','des_concepto','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

