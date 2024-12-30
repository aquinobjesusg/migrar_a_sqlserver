<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Sucursales;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class SucursalesController extends Controller
{
public $tabla = "sucursales";
public $vista = "cruds.crud-sucursales-";
public $ruta = "sucursales";
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
[ 'id'  => $id ,'code_sucursal'  => $request->code_sucursal ,'name_sucursal'  => $request->name_sucursal ,'dineccion_sucursal'  => $request->dineccion_sucursal ,'telefono_sucursal'  => $request->telefono_sucursal ,'celular_sucursal'  => $request->celular_sucursal ,'email_afiliado'  => $request->email_afiliado ,'afiliado_id'  => $request->afiliado_id ,'rif_sucursal'  => $request->rif_sucursal ,'domicilio_fiscal'  => $request->domicilio_fiscal ,'telefono_fiscal'  => $request->telefono_fiscal ,'codigo_postal'  => $request->codigo_postal ,'zona'  => $request->zona ,'ciudad'  => $request->ciudad ,'estado'  => $request->estado ,'pais'  => $request->pais ,'in_valido'  => $request->in_valido ,'ca_valoracion'  => $request->ca_valoracion ,'in_abierto'  => $request->in_abierto  ] 
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
[ 'code_sucursal'  => $request->code_sucursal ,'name_sucursal'  => $request->name_sucursal ,'dineccion_sucursal'  => $request->dineccion_sucursal ,'telefono_sucursal'  => $request->telefono_sucursal ,'celular_sucursal'  => $request->celular_sucursal ,'email_afiliado'  => $request->email_afiliado ,'afiliado_id'  => $request->afiliado_id ,'rif_sucursal'  => $request->rif_sucursal ,'domicilio_fiscal'  => $request->domicilio_fiscal ,'telefono_fiscal'  => $request->telefono_fiscal ,'codigo_postal'  => $request->codigo_postal ,'zona'  => $request->zona ,'ciudad'  => $request->ciudad ,'estado'  => $request->estado ,'pais'  => $request->pais ,'in_valido'  => $request->in_valido ,'ca_valoracion'  => $request->ca_valoracion ,'in_abierto'  => $request->in_abierto  ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

