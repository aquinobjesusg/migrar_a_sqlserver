<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pconsult extends Model
{
    protected $table = 'pconsult';
    protected $primaryKey = "id";
    protected $fillable = ['nconsul','nhisto','enfactual','evolu','tratami','exa_fi','image','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

