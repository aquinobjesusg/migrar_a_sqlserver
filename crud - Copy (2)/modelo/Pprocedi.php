<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pprocedi extends Model
{
    protected $table = 'pprocedi';
    protected $primaryKey = "id";
    protected $fillable = ['nhisto','nconsul','procedi1','procedi2','procedi3','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

