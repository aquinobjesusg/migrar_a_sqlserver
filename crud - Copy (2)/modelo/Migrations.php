<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Migrations extends Model
{
    protected $table = 'migrations';
    protected $primaryKey = "id";
    protected $fillable = ['id','updated_at','usercreated_at','userupdated_at','created_at','id','migration','batch'];
 
}

