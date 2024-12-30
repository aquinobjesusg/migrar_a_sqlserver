<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especial extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'especial';

    protected $fillable = ['codeespecial','especialidad','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

