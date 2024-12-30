<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_epecial extends Model
{
    protected $table = 'p_epecial';
    protected $primaryKey = "id";
    protected $fillable = ['codespe','especiali','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

