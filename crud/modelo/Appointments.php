<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $table = 'appointments';
    protected $primaryKey = "id";
    protected $fillable = ['id','client_id','date','time','status','note','created_at','updated_at','members','color','order_position'];
 
}

