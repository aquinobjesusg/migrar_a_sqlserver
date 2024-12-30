<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operadores extends Model
{
    protected $table = 'operadores';
    protected $primaryKey = "id";
    protected $fillable = ['primera','segunda','nonbre','nivel','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

