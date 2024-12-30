<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antecedentes extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'antecedentes';

    protected $fillable = ['codantecedente','descripcion','codtipo','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

