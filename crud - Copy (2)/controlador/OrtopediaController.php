<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class OrtopediaController extends Controller
{
public $tabla = "ortopedia";
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
[ 'nrohistoria'  => $request->nrohistoria ,'nroconsulta'  => $request->nroconsulta ,'botas'  => $request->botas ,'zapatos'  => $request->zapatos ,'soporte'  => $request->soporte ,'thomas'  => $request->thomas ,'normal'  => $request->normal ,'tacon_int'  => $request->tacon_int ,'tacon_ext'  => $request->tacon_ext ,'suela_int'  => $request->suela_int ,'suela_ext'  => $request->suela_ext ,'borde_int_rect'  => $request->borde_int_rect ,'borde_int_abdu'  => $request->borde_int_abdu ,'suela_normal'  => $request->suela_normal ,'suela_antirres'  => $request->suela_antirres ,'aparatos'  => $request->aparatos ,'observacion'  => $request->observacion ,'plantilla'  => $request->plantilla ,'aae'  => $request->aae ,'api'  => $request->api , ] 
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
[ 'nrohistoria'  => $request->nrohistoria ,'nroconsulta'  => $request->nroconsulta ,'botas'  => $request->botas ,'zapatos'  => $request->zapatos ,'soporte'  => $request->soporte ,'thomas'  => $request->thomas ,'normal'  => $request->normal ,'tacon_int'  => $request->tacon_int ,'tacon_ext'  => $request->tacon_ext ,'suela_int'  => $request->suela_int ,'suela_ext'  => $request->suela_ext ,'borde_int_rect'  => $request->borde_int_rect ,'borde_int_abdu'  => $request->borde_int_abdu ,'suela_normal'  => $request->suela_normal ,'suela_antirres'  => $request->suela_antirres ,'aparatos'  => $request->aparatos ,'observacion'  => $request->observacion ,'plantilla'  => $request->plantilla ,'aae'  => $request->aae ,'api'  => $request->api , ] 
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

