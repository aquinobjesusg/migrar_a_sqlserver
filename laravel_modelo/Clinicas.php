<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinicas extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'clinicas';

    protected $fillable = ['cod_clin','nom_clin','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

