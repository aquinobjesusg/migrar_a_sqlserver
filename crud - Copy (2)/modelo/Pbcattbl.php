<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pbcattbl extends Model
{
    protected $table = 'pbcattbl';
    protected $primaryKey = "id";
    protected $fillable = ['pbt_tnam','pbt_tid','pbt_ownr','pbd_fhgt','pbd_fwgt','pbd_fitl','pbd_funl','pbd_fchr','pbd_fptc','pbd_ffce','pbh_fhgt','pbh_fwgt','pbh_fitl','pbh_funl','pbh_fchr','pbh_fptc','pbh_ffce','pbl_fhgt','pbl_fwgt','pbl_fitl','pbl_funl','pbl_fchr','pbl_fptc','pbl_ffce','pbt_cmnt','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

