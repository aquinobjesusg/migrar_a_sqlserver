<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SucursalesController extends Controller
{
public $tabla = "sucursales";
public $vista = "sucursales";
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
[ 'id'  => $id ,'code_sucursal'  => $request->code_sucursal ,'name_sucursal'  => $request->name_sucursal ,'dineccion_sucursal'  => $request->dineccion_sucursal ,'telefono_sucursal'  => $request->telefono_sucursal ,'celular_sucursal'  => $request->celular_sucursal ,'email_afiliado'  => $request->email_afiliado ,'afiliado_id'  => $request->afiliado_id ,'rif_sucursal'  => $request->rif_sucursal ,'domicilio_fiscal'  => $request->domicilio_fiscal ,'telefono_fiscal'  => $request->telefono_fiscal ,'codigo_postal'  => $request->codigo_postal ,'zona'  => $request->zona ,'ciudad'  => $request->ciudad ,'estado'  => $request->estado ,'pais'  => $request->pais ,'in_valido'  => $request->in_valido ,'ca_valoracion'  => $request->ca_valoracion ,'in_abierto'  => $request->in_abierto  ] 
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
