<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Contratos;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
public $tabla = "contratos";
public $vista = "cruds.crud-contratos-";
public $ruta = "contratos";
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
[ 'id'  => $id ,'nacionalidad_titular'  => $request->nacionalidad_titular ,'cedula_titular'  => $request->cedula_titular ,'nombre_titular_beneficiario'  => $request->nombre_titular_beneficiario ,'apellido_titular_beneficiario'  => $request->apellido_titular_beneficiario ,'estado_civil'  => $request->estado_civil ,'sexo_titular_beneficiario'  => $request->sexo_titular_beneficiario ,'fecha_nacimiento_titular_beneficiario'  => $request->fecha_nacimiento_titular_beneficiario ,'parentesco'  => $request->parentesco ,'nombre_agente_recaudador'  => $request->nombre_agente_recaudador ,'tipo_de_cuenta'  => $request->tipo_de_cuenta ,'numero_de_cuenta'  => $request->numero_de_cuenta ,'tipo_de_vencimiento'  => $request->tipo_de_vencimiento ,'codigo_empresa'  => $request->codigo_empresa ,'codigo_sucursal'  => $request->codigo_sucursal ,'numero_de_telefono'  => $request->numero_de_telefono ,'correo_electronico'  => $request->correo_electronico ,'codigo_cia_seguro'  => $request->codigo_cia_seguro ,'codigo_plan_en_siser'  => $request->codigo_plan_en_siser ,'codigo_productor_asesor'  => $request->codigo_productor_asesor ,'estado'  => $request->estado ,'estado_observacion'  => $request->estado_observacion  ] 
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
[ 'nacionalidad_titular'  => $request->nacionalidad_titular ,'cedula_titular'  => $request->cedula_titular ,'nombre_titular_beneficiario'  => $request->nombre_titular_beneficiario ,'apellido_titular_beneficiario'  => $request->apellido_titular_beneficiario ,'estado_civil'  => $request->estado_civil ,'sexo_titular_beneficiario'  => $request->sexo_titular_beneficiario ,'fecha_nacimiento_titular_beneficiario'  => $request->fecha_nacimiento_titular_beneficiario ,'parentesco'  => $request->parentesco ,'nombre_agente_recaudador'  => $request->nombre_agente_recaudador ,'tipo_de_cuenta'  => $request->tipo_de_cuenta ,'numero_de_cuenta'  => $request->numero_de_cuenta ,'tipo_de_vencimiento'  => $request->tipo_de_vencimiento ,'codigo_empresa'  => $request->codigo_empresa ,'codigo_sucursal'  => $request->codigo_sucursal ,'numero_de_telefono'  => $request->numero_de_telefono ,'correo_electronico'  => $request->correo_electronico ,'codigo_cia_seguro'  => $request->codigo_cia_seguro ,'codigo_plan_en_siser'  => $request->codigo_plan_en_siser ,'codigo_productor_asesor'  => $request->codigo_productor_asesor ,'estado'  => $request->estado ,'estado_observacion'  => $request->estado_observacion  ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

