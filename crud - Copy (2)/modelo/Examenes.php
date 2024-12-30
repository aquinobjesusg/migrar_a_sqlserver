<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examenes extends Model
{
    protected $table = 'examenes';
    protected $primaryKey = "id";
    protected $fillable = ['codeexamen','examen','codetipo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

