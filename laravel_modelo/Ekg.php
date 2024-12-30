<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekg extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'ekg';

    protected $fillable = ['ritmo','fc','pr','aqrs','qt','ap','at','alteraciones','conclusiones','numhistoria','numconsulta','hbsai','birdhh','bcrdhh','bav','primer','segundo','tercero','birihh','bcrihh','hallazgos','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

