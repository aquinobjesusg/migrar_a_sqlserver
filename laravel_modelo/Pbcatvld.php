<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pbcatvld extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'pbcatvld';

    protected $fillable = ['pbv_name','pbv_vald','pbv_type','pbv_cntr','pbv_msg','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

