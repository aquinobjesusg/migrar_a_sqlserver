<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intenven_servi extends Model
{
    protected $table = 'intenven_servi';
    protected $primaryKey = "id";
    protected $fillable = ['codigo','nombre','precio_principal','precio_auxiliar','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

