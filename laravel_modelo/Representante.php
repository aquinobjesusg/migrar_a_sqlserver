<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'representante';

    protected $fillable = ['numhistoria','nombre','codeparentesco','direccion','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

