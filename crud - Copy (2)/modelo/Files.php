<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';
    protected $primaryKey = "id";
    protected $fillable = ['usercreated_at','id','updated_at','created_at','userupdated_at','id','created_at','updated_at','usercreated_at','userupdated_at','title','name'];
 
}

