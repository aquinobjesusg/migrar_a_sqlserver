<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Transacciones;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class TransaccionesController extends Controller
{
public $tabla = "transacciones";
public $vista = "cruds.crud-transacciones-";
public $ruta = "transacciones";
    public $registro = null;

    public function __construct() { 
    
    }
    
    public function index()
    {
       $this->registros = DB::table($this->tabla)->get();
       $registros = $this->registros;
   
       return view($this->vista.'index', [
           'registros' => $registros
         ]);
    }
   
    public function create()
    {
        return view( $this->vista.'create');
    }
   
    public function store(Request $request)
    {

       $id = DB::table($this->tabla)->max('id');  
       $id = $id  + 1;

       DB::table($this->tabla)->updateOrInsert(
[ 'id'  => $id ,'fe_registro'  => $request->fe_registro ,'name_user'  => $request->name_user ,'id_user'  => $request->id_user ,'identificationnac'  => $request->identificationnac ,'identificationnumber'  => $request->identificationnumber ,'cellphone'  => $request->cellphone ,'email'  => $request->email ,'reference_t'  => $request->reference_t ,'cantidad'  => $request->cantidad ,'totalusd'  => $request->totalusd ,'totalbs'  => $request->totalbs ,'tasa'  => $request->tasa ,'cantcuotas'  => $request->cantcuotas ,'amount'  => $request->amount ,'title'  => $request->title ,'description_t'  => $request->description_t ,'id_transaccion'  => $request->id_transaccion ,'status'  => $request->status ,'ti_registro'  => $request->ti_registro ,'tipo_facccionado'  => $request->tipo_facccionado  ] 
       );
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function show($id)
    {
       $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
       $registros = $this->registros;
       return view($this->vista.'show',compact('registros'));
    }
   
    public function edit($id)
    {
        $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
        $registros = $this->registros;
        return view($this->vista.'edit',compact('registros'));
    }
   
    public function update(Request $request, $id)
    {
       
       $affected = DB::table($this->tabla)->where('id', $id)->update(
[ 'fe_registro'  => $request->fe_registro ,'name_user'  => $request->name_user ,'id_user'  => $request->id_user ,'identificationnac'  => $request->identificationnac ,'identificationnumber'  => $request->identificationnumber ,'cellphone'  => $request->cellphone ,'email'  => $request->email ,'reference_t'  => $request->reference_t ,'cantidad'  => $request->cantidad ,'totalusd'  => $request->totalusd ,'totalbs'  => $request->totalbs ,'tasa'  => $request->tasa ,'cantcuotas'  => $request->cantcuotas ,'amount'  => $request->amount ,'title'  => $request->title ,'description_t'  => $request->description_t ,'id_transaccion'  => $request->id_transaccion ,'status'  => $request->status ,'ti_registro'  => $request->ti_registro ,'tipo_facccionado'  => $request->tipo_facccionado  ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

