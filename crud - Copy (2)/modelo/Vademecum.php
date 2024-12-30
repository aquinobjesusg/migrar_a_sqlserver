<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vademecum extends Model
{
    protected $table = 'vademecum';
    protected $primaryKey = "id";
    protected $fillable = ['codemedicina','nombregenerico','nombrecomercial','dosificacion','uso','presentacion','concentracion','cada','durante','pvc','pvs','dosis','sico','nombrecomercial1','nombrecomercial2','nombrecomercial3','totalre','sicome','sicome1','sicome2','sicome3','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

