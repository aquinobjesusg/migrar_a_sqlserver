<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intenven_servi extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'intenven_servi';

    protected $fillable = ['codigo','nombre','precio_principal','precio_auxiliar','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

