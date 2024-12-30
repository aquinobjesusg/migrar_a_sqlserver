<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_examen extends Model
{
    protected $table = 'p_examen';
    protected $primaryKey = "id";
    protected $fillable = ['codexa','codetip','examen','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

