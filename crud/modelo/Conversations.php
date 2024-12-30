<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Conversations extends Model
{
    protected $table = 'conversations';
    protected $primaryKey = "id";
    protected $fillable = ['id','sender_id','receiver_id','created_at','updated_at'];
 
}

