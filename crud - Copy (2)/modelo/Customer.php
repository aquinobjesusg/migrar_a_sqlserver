<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = "id";
    protected $fillable = ['updated_at','created_at','id','userupdated_at','usercreated_at','id','fname','lname','address','city','company_name','phone','telefono','state','zip','sms','email'];
 
}

