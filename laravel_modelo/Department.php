<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'department';

    protected $fillable = ['dept_id','dept_name','dept_head_id','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

