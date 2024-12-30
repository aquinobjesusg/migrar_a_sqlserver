<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms_compra extends Model
{
    protected $table = 'sms_compra';
    protected $primaryKey = "id";
    protected $fillable = ['conse_compra','fecha_compra','monto_compra','cantidad_compra','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

