<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_tipoe extends Model
{
    protected $table = 'p_tipoe';
    protected $primaryKey = "id";
    protected $fillable = ['codexam','descrip','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

