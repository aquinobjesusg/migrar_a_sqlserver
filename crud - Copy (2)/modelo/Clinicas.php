<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinicas extends Model
{
    protected $table = 'clinicas';
    protected $primaryKey = "id";
    protected $fillable = ['cod_clin','nom_clin','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

