<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grafi_so extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'grafi_so';

    protected $fillable = ['historia','consulta','fecha','medida','valor','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

