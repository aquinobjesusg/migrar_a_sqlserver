<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vademecum extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'vademecum';

    protected $fillable = ['codemedicina','nombregenerico','nombrecomercial','dosificacion','uso','presentacion','concentracion','cada','durante','pvc','pvs','dosis','sico','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

