<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pvademe extends Model
{
    protected $table = 'pvademe';
    protected $primaryKey = "id";
    protected $fillable = ['codmedi','nombrege','nombreco','dosifi','uso','presenta','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

