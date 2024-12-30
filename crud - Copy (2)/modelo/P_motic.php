<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_motic extends Model
{
    protected $table = 'p_motic';
    protected $primaryKey = "id";
    protected $fillable = ['codmoti','descrip','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

