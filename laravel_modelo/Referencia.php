<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'referencia';

    protected $fillable = ['nrohistoria','nroconsulta','ceduladoctor','referencia','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

