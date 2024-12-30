<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operadores extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'operadores';

    protected $fillable = ['primera','segunda','nonbre','nivel','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

