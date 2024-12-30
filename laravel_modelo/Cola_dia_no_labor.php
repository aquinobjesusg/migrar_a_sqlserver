<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cola_dia_no_labor extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'cola_dia_no_labor';

    protected $fillable = ['dia','tipo','motivo','medico','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

