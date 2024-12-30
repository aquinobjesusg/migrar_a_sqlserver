<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class ImplanteController extends Controller
{
public $tabla = "implante";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha_reporte'  => $request->fecha_reporte ,'fecha_opera'  => $request->fecha_opera ,'diagnostico'  => $request->diagnostico ,'plan_operatorio'  => $request->plan_operatorio ,'texto'  => $request->texto ,'estabilizada'  => $request->estabilizada ,'componente_femoral'  => $request->componente_femoral ,'componente_tibial'  => $request->componente_tibial ,'componente_tibial_it'  => $request->componente_tibial_it ,'componente_pastelar'  => $request->componente_pastelar ,'reque_metilmeticatrilato'  => $request->reque_metilmeticatrilato ,'reque_metilmeticatrilato_cant'  => $request->reque_metilmeticatrilato_cant ,'reque_steridrape'  => $request->reque_steridrape ,'reque_steridrape_cant'  => $request->reque_steridrape_cant ,'reque_coban_esteril'  => $request->reque_coban_esteril ,'reque_coban_esteril_cant'  => $request->reque_coban_esteril_cant ,'reque_autosutura'  => $request->reque_autosutura ,'reque_autosutura_cant'  => $request->reque_autosutura_cant ,'reque_orthopack'  => $request->reque_orthopack ,'reque_orthopack_cant'  => $request->reque_orthopack_cant ,'sistema'  => $request->sistema ,'marca'  => $request->marca ,'tipo'  => $request->tipo ,'puro_texto'  => $request->puro_texto , ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha_reporte'  => $request->fecha_reporte ,'fecha_opera'  => $request->fecha_opera ,'diagnostico'  => $request->diagnostico ,'plan_operatorio'  => $request->plan_operatorio ,'texto'  => $request->texto ,'estabilizada'  => $request->estabilizada ,'componente_femoral'  => $request->componente_femoral ,'componente_tibial'  => $request->componente_tibial ,'componente_tibial_it'  => $request->componente_tibial_it ,'componente_pastelar'  => $request->componente_pastelar ,'reque_metilmeticatrilato'  => $request->reque_metilmeticatrilato ,'reque_metilmeticatrilato_cant'  => $request->reque_metilmeticatrilato_cant ,'reque_steridrape'  => $request->reque_steridrape ,'reque_steridrape_cant'  => $request->reque_steridrape_cant ,'reque_coban_esteril'  => $request->reque_coban_esteril ,'reque_coban_esteril_cant'  => $request->reque_coban_esteril_cant ,'reque_autosutura'  => $request->reque_autosutura ,'reque_autosutura_cant'  => $request->reque_autosutura_cant ,'reque_orthopack'  => $request->reque_orthopack ,'reque_orthopack_cant'  => $request->reque_orthopack_cant ,'sistema'  => $request->sistema ,'marca'  => $request->marca ,'tipo'  => $request->tipo ,'puro_texto'  => $request->puro_texto , ] 
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

