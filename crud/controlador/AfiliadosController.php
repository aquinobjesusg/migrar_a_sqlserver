<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Afiliados;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class AfiliadosController extends Controller
{
public $tabla = "afiliados";
public $vista = "cruds.crud-afiliados-";
public $ruta = "afiliados";
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
[ 'id'  => $id ,'code_afiliado'  => $request->code_afiliado ,'name_afiliado'  => $request->name_afiliado ,'dineccion_afiliado'  => $request->dineccion_afiliado ,'telefono_afiliado'  => $request->telefono_afiliado ,'celular_afiliado'  => $request->celular_afiliado ,'email_afiliado'  => $request->email_afiliado ,'empresa_id'  => $request->empresa_id ,'rif_afiliado'  => $request->rif_afiliado ,'domicilio_fiscal'  => $request->domicilio_fiscal ,'telefono_fiscal'  => $request->telefono_fiscal  ] 
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
[ 'code_afiliado'  => $request->code_afiliado ,'name_afiliado'  => $request->name_afiliado ,'dineccion_afiliado'  => $request->dineccion_afiliado ,'telefono_afiliado'  => $request->telefono_afiliado ,'celular_afiliado'  => $request->celular_afiliado ,'email_afiliado'  => $request->email_afiliado ,'empresa_id'  => $request->empresa_id ,'rif_afiliado'  => $request->rif_afiliado ,'domicilio_fiscal'  => $request->domicilio_fiscal ,'telefono_fiscal'  => $request->telefono_fiscal  ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

