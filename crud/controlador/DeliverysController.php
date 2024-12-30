<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Deliverys;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class DeliverysController extends Controller
{
public $tabla = "deliverys";
public $vista = "cruds.crud-deliverys-";
public $ruta = "deliverys";
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
[ 'id'  => $id ,'name_delivery'  => $request->name_delivery ,'cedula_delivery'  => $request->cedula_delivery ,'telefono_delivery'  => $request->telefono_delivery ,'celular_delivery'  => $request->celular_delivery ,'email_delivery'  => $request->email_delivery ,'nro_placa'  => $request->nro_placa ,'color_vehiculo'  => $request->color_vehiculo ,'tipo_vehiculo'  => $request->tipo_vehiculo ,'user_id'  => $request->user_id ,'ca_valoracion'  => $request->ca_valoracion  ] 
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
[ 'name_delivery'  => $request->name_delivery ,'cedula_delivery'  => $request->cedula_delivery ,'telefono_delivery'  => $request->telefono_delivery ,'celular_delivery'  => $request->celular_delivery ,'email_delivery'  => $request->email_delivery ,'nro_placa'  => $request->nro_placa ,'color_vehiculo'  => $request->color_vehiculo ,'tipo_vehiculo'  => $request->tipo_vehiculo ,'user_id'  => $request->user_id ,'ca_valoracion'  => $request->ca_valoracion  ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

