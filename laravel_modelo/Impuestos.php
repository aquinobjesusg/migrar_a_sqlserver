<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Impuestos extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'impuestos';

    protected $fillable = ['iva','islr','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

