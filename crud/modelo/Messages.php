<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';
    protected $primaryKey = "id";
    protected $fillable = ['id','conversation_id','user_id','body','created_at','updated_at'];
 
}

