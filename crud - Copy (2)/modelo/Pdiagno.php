<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pdiagno extends Model
{
    protected $table = 'pdiagno';
    protected $primaryKey = "id";
    protected $fillable = ['nhisto','nconsul','codedia','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

