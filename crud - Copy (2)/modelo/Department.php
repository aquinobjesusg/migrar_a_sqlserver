<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
    protected $primaryKey = "id";
    protected $fillable = ['dept_id','dept_name','dept_head_id','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

