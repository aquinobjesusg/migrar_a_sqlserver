<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Precipe extends Model
{
    protected $table = 'precipe';
    protected $primaryKey = "id";
    protected $fillable = ['nhisto','nconsul','codmedi','indicacio','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

