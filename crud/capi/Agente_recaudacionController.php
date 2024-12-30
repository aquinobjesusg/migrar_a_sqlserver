<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Agente_recaudacionController extends Controller
{
public $tabla = "agente_recaudacion";
public $vista = "agente_recaudacion";
   public $registro = null;

     public function __construct() { 
     }
     
      public function index()
      {
 
         $registros = DB::table($this->tabla)->get();
 
         return response()->json([
             'data' => $registros,
         ]);

      }

      public function leer()
      {
 
         $registros = DB::table($this->tabla)->get();
 
         return response()->json([
             'status' => true,
             'registros' => $registros,
             'mensaje' => "Registro Guardado Satisfactoriamente",
             'codigo' => 200
         ]);

      }

      public function store(Request $request)
      {

         $id = DB::table($this->tabla)->max('id');  
         $id = $id  + 1;
  
         DB::table($this->tabla)->updateOrInsert(
[ 'id'  => $id ,'codigo'  => $request->codigo ,'nombre'  => $request->nombre , ] 
         );

         return response()->json([
            'status' => true,
            'registros' => $registros,
            'mensaje' => "Registro Guardado Satisfactoriamente",
            'codigo' => 200
        ]);
 
     }
  
      public function show($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         return response()->json([
            'status' => true,
            'registros' => $registros,
            'mensaje' => "Registro Guardado Satisfactoriamente",
            'codigo' => 200
        ]);
      }
  
      public function edit($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         return response()->json([
            'status' => true,
            'registros' => $registros,
            'mensaje' => "Registro Guardado Satisfactoriamente",
            'codigo' => 200
        ]);
      }
  
      public function update(Request $request, $id)
      {
         $registros = DB::table($this->tabla)->where('id', $id)->update(
            [ 'name'  => $request->name ] 
         );
         return response()->json([
            'status' => true,
            'registros' => $registros,
            'mensaje' => "Registro Guardado Satisfactoriamente",
            'codigo' => 200
        ]);
      }
  
      public function destroy($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->delete();
         return response()->json([
            'status' => true,
            'registros' => $registros,
            'mensaje' => "Registro Guardado Satisfactoriamente",
            'codigo' => 200
        ]);
      }
  
}
