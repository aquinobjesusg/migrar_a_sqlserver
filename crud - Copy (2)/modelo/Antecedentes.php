<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antecedentes extends Model
{
    protected $table = 'antecedentes';
    protected $primaryKey = "id";
    protected $fillable = ['codantecedente','descripcion','codtipo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

