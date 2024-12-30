<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms_envio_pac extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'sms_envio_pac';

    protected $fillable = ['nrohistoria','nroconsulta','numero_cel','texto_sms','orden','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

