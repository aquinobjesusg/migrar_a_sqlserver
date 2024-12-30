<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seg_emp extends Model
{
    protected $table = 'seg_emp';
    protected $primaryKey = "id";
    protected $fillable = ['codesegemp','nombre','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

