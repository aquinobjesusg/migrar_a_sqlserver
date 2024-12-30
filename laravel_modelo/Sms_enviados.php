<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms_enviados extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'sms_enviados';

    protected $fillable = ['conta','usuario','medico','proveedor','numero','mensaje','fecha','tipo','historia','orden','consulta','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

