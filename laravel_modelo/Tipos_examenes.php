<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos_examenes extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'tipos_examenes';

    protected $fillable = ['codetipo','tipo','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

