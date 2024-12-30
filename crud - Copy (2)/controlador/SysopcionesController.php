<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class SysopcionesController extends Controller
{
public $tabla = "sysopciones";
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
[ 'sistema_id'  => $request->sistema_id ,'caso'  => $request->caso ,'contexto'  => $request->contexto ,'modulo'  => $request->modulo ,'menu'  => $request->menu ,'submenu'  => $request->submenu ,'ordernum'  => $request->ordernum ,'ruta'  => $request->ruta ,'icon'  => $request->icon ,'activo'  => $request->activo ,'title'  => $request->title ,'imagen'  => $request->imagen ,'role'  => $request->role  ] 
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
[ 'sistema_id'  => $request->sistema_id ,'caso'  => $request->caso ,'contexto'  => $request->contexto ,'modulo'  => $request->modulo ,'menu'  => $request->menu ,'submenu'  => $request->submenu ,'ordernum'  => $request->ordernum ,'ruta'  => $request->ruta ,'icon'  => $request->icon ,'activo'  => $request->activo ,'title'  => $request->title ,'imagen'  => $request->imagen ,'role'  => $request->role  ] 
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

