<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pmoti_co extends Model
{
    protected $table = 'pmoti_co';
    protected $primaryKey = "id";
    protected $fillable = ['codmoti','nhistori','nconsul','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

