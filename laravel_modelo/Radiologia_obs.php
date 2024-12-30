<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radiologia_obs extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'radiologia_obs';

    protected $fillable = ['numhistoria','numconsulta','observacion','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

