<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radiologias extends Model
{
    protected $table = 'radiologias';
    protected $primaryKey = "id";
    protected $fillable = ['coderadio','estudio','codetipo','opciones','tipo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

