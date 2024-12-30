<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Transacciones_details;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class Transacciones_detailsController extends Controller
{
public $tabla = "transacciones_details";
public $vista = "cruds.crud-transacciones_details-";
public $ruta = "transacciones_details";
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
[ 'id'  => $id ,'name_producto'  => $request->name_producto ,'slug_producto'  => $request->slug_producto ,'id_item'  => $request->id_item ,'cantidad'  => $request->cantidad ,'totalusd'  => $request->totalusd ,'totalbs'  => $request->totalbs ,'tasa'  => $request->tasa ,'status'  => $request->status ,'id_trans'  => $request->id_trans  ] 
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
[ 'name_producto'  => $request->name_producto ,'slug_producto'  => $request->slug_producto ,'id_item'  => $request->id_item ,'cantidad'  => $request->cantidad ,'totalusd'  => $request->totalusd ,'totalbs'  => $request->totalbs ,'tasa'  => $request->tasa ,'status'  => $request->status ,'id_trans'  => $request->id_trans  ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

