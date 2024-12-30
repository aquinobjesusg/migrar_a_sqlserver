<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Failed_jobs extends Model
{
    protected $table = 'failed_jobs';
    protected $primaryKey = "id";
    protected $fillable = ['created_at','id','updated_at','usercreated_at','userupdated_at','id','uuid','connection','queue'];
 
}

