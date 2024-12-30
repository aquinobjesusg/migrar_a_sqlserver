<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Orden_ingresoController extends Controller
{
public $tabla = "orden_ingreso";
    public $registro = null;

     public function __construct() { 
        
     }
     
     public function index()
     {
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     public function create()
     {
         return view( 'crud' . $this->tabla.'.create');
     }
 
     public function store(Request $request)
     {
        DB::table($this->tabla)->updateOrInsert(
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha_operacion'  => $request->fecha_operacion ,'fecha_reporte'  => $request->fecha_reporte ,'texto'  => $request->texto ,'idx'  => $request->idx ,'reco_ingresar'  => $request->reco_ingresar ,'reco_depi'  => $request->reco_depi ,'reco_llevar'  => $request->reco_llevar ,'reco_cedroxin'  => $request->reco_cedroxin ,'reco_ejercicios'  => $request->reco_ejercicios ,'reco_terapia'  => $request->reco_terapia ,'reco_control'  => $request->reco_control ,'reco_higiene'  => $request->reco_higiene ,'reco_ropa'  => $request->reco_ropa ,'reco_tomar'  => $request->reco_tomar ,'reco_clexane'  => $request->reco_clexane ,'reco_ejercicios_res'  => $request->reco_ejercicios_res ,'reco_sangre'  => $request->reco_sangre ,'reco_avisar'  => $request->reco_avisar ,'detalle'  => $request->detalle , ] 
        );
         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function show($id)
     {
        $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
        $registros = $this->registros;
        return view('crud' . $this->tabla . '.show',compact('registros'));
     }
 
     public function edit($id)
     {
         $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         $registros = $this->registros;
         return view('crud' .$this->tabla .'.edit',compact('registros'));
     }
 
     public function update(Request $request, $id)
     {
        
        $affected = DB::table($this->tabla)->where('id', $id)->update(
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha_operacion'  => $request->fecha_operacion ,'fecha_reporte'  => $request->fecha_reporte ,'texto'  => $request->texto ,'idx'  => $request->idx ,'reco_ingresar'  => $request->reco_ingresar ,'reco_depi'  => $request->reco_depi ,'reco_llevar'  => $request->reco_llevar ,'reco_cedroxin'  => $request->reco_cedroxin ,'reco_ejercicios'  => $request->reco_ejercicios ,'reco_terapia'  => $request->reco_terapia ,'reco_control'  => $request->reco_control ,'reco_higiene'  => $request->reco_higiene ,'reco_ropa'  => $request->reco_ropa ,'reco_tomar'  => $request->reco_tomar ,'reco_clexane'  => $request->reco_clexane ,'reco_ejercicios_res'  => $request->reco_ejercicios_res ,'reco_sangre'  => $request->reco_sangre ,'reco_avisar'  => $request->reco_avisar ,'detalle'  => $request->detalle , ] 
        );

         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function destroy($id)
     {
        $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     
}

