<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Valoracion;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class ValoracionController extends Controller
{
public $tabla = "valoracion";
public $vista = "cruds.crud-valoracion-";
public $ruta = "valoracion";
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
[ 'id'  => $id ,'valor'  => $request->valor ,'user_id'  => $request->user_id ,'sucursal_id'  => $request->sucursal_id ,'afiliado_id'  => $request->afiliado_id ,'delivery_id'  => $request->delivery_id ,'empresa_id'  => $request->empresa_id ,'producto_id'  => $request->producto_id  ] 
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
[ 'valor'  => $request->valor ,'user_id'  => $request->user_id ,'sucursal_id'  => $request->sucursal_id ,'afiliado_id'  => $request->afiliado_id ,'delivery_id'  => $request->delivery_id ,'empresa_id'  => $request->empresa_id ,'producto_id'  => $request->producto_id  ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

