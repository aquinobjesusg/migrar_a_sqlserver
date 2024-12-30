<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_ante extends Model
{
    protected $table = 'p_ante';
    protected $primaryKey = "id";
    protected $fillable = ['codante','codtipo','descrip','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

