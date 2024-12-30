<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';
    protected $primaryKey = "id";
    protected $fillable = ['id','site_name','site_email','site_title','footer_text','sidebar_collapse','created_at','updated_at'];
 
}

