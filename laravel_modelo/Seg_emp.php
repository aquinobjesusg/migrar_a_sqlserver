<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seg_emp extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'seg_emp';

    protected $fillable = ['codesegemp','nombre','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

