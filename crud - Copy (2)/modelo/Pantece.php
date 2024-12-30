<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pantece extends Model
{
    protected $table = 'pantece';
    protected $primaryKey = "id";
    protected $fillable = ['nhisto','codante','detalle','tipo','descrip','consul','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

