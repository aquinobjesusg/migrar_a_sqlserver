<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pbcatedt extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'pbcatedt';

    protected $fillable = ['pbe_name','pbe_edit','pbe_type','pbe_cntr','pbe_seqn','pbe_flag','pbe_work','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

