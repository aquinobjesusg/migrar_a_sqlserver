<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class PcolaController extends Controller
{
public $tabla = "pcola";
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
[ 'atendido'  => $request->atendido ,'conse'  => $request->conse ,'estado'  => $request->estado ,'fecha'  => $request->fecha ,'hora_fin'  => $request->hora_fin ,'hora_ini'  => $request->hora_ini ,'medico'  => $request->medico ,'motivo'  => $request->motivo ,'nhistoria'  => $request->nhistoria ,'numorden'  => $request->numorden ,'tipo'  => $request->tipo ,'turno'  => $request->turno ,'fechac'  => $request->fechac , ] 
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
[ 'atendido'  => $request->atendido ,'conse'  => $request->conse ,'estado'  => $request->estado ,'fecha'  => $request->fecha ,'hora_fin'  => $request->hora_fin ,'hora_ini'  => $request->hora_ini ,'medico'  => $request->medico ,'motivo'  => $request->motivo ,'nhistoria'  => $request->nhistoria ,'numorden'  => $request->numorden ,'tipo'  => $request->tipo ,'turno'  => $request->turno ,'fechac'  => $request->fechac , ] 
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

