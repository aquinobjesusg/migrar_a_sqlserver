<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Failed_jobs extends Model
{
    protected $table = 'failed_jobs';
    protected $primaryKey = "id";
    protected $fillable = ['id','uuid','connection','queue'];
 
}

