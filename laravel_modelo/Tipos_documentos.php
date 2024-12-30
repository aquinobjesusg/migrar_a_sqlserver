<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos_documentos extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'tipos_documentos';

    protected $fillable = ['tip_documento','des_documento','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

