<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultorios extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'consultorios';

    protected $fillable = ['codigo','consultorio','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

