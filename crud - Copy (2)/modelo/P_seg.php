<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_seg extends Model
{
    protected $table = 'p_seg';
    protected $primaryKey = "id";
    protected $fillable = ['codeseg','nombre','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

