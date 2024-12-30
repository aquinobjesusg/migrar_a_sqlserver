<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContratosController extends Controller
{
public $tabla = "contratos";
public $vista = "contratos";
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
[ 'id'  => $id ,'nacionalidad_titular'  => $request->nacionalidad_titular ,'cedula_titular'  => $request->cedula_titular ,'nombre_titular_beneficiario'  => $request->nombre_titular_beneficiario ,'apellido_titular_beneficiario'  => $request->apellido_titular_beneficiario ,'estado_civil'  => $request->estado_civil ,'sexo_titular_beneficiario'  => $request->sexo_titular_beneficiario ,'fecha_nacimiento_titular_beneficiario'  => $request->fecha_nacimiento_titular_beneficiario ,'parentesco'  => $request->parentesco ,'nombre_agente_recaudador'  => $request->nombre_agente_recaudador ,'tipo_de_cuenta'  => $request->tipo_de_cuenta ,'numero_de_cuenta'  => $request->numero_de_cuenta ,'tipo_de_vencimiento'  => $request->tipo_de_vencimiento ,'codigo_empresa'  => $request->codigo_empresa ,'codigo_sucursal'  => $request->codigo_sucursal ,'numero_de_telefono'  => $request->numero_de_telefono ,'correo_electronico'  => $request->correo_electronico ,'codigo_cia_seguro'  => $request->codigo_cia_seguro ,'codigo_plan_en_siser'  => $request->codigo_plan_en_siser ,'codigo_productor_asesor'  => $request->codigo_productor_asesor ,'estado'  => $request->estado ,'estado_observacion'  => $request->estado_observacion  ] 
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
