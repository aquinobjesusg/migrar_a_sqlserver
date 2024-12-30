<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bancos extends Model
{
    protected $table = 'bancos';
    protected $primaryKey = "id";
    protected $fillable = ['cod_banco','nombre_banco','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

