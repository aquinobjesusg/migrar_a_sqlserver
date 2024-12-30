<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'consultas';

    protected $fillable = ['numhistoria','nroconsulta','fecha','enfermedadactual','peso','talla','fc','pp','circcefalica','circtoraxica','circabdominal','tasentado','taacostado','tapie','resultadoexamencomp','eliminado','faringe','nariz','oido','laringe','cuello','otros','evolucion','observaciones','tem_otica','tem_oral','tem_axilar','medico','funcionae','test','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

