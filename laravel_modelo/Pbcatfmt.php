<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pbcatfmt extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'pbcatfmt';

    protected $fillable = ['pbf_name','pbf_frmt','pbf_type','pbf_cntr','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

