<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Constancia_obs extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'constancia_obs';

    protected $fillable = ['numhistoria','numconsulta','observacion','titulo','observacion01','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

