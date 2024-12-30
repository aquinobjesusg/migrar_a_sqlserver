<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pbcatfmt extends Model
{
    protected $table = 'pbcatfmt';
    protected $primaryKey = "id";
    protected $fillable = ['pbf_name','pbf_frmt','pbf_type','pbf_cntr','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

