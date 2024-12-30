<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosticos extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'diagnosticos';

    protected $fillable = ['codediagnostico','descripcion','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

