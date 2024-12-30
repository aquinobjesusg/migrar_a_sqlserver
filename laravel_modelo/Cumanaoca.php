<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cumanaoca extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'cumanaoca';

    protected $fillable = ['primera','cumanacoa','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

