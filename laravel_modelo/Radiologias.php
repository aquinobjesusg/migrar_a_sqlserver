<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radiologias extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'radiologias';

    protected $fillable = ['coderadio','estudio','codetipo','opciones','tipo','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

