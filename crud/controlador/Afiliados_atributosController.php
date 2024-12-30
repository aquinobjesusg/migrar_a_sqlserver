<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Afiliados_atributos;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class Afiliados_atributosController extends Controller
{
public $tabla = "afiliados_atributos";
public $vista = "cruds.crud-afiliados_atributos-";
public $ruta = "afiliados_atributos";
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
[ 'id'  => $id ,'afiliado_id'  => $request->afiliado_id ,'logo_principal'  => $request->logo_principal ,'imagen_1'  => $request->imagen_1 ,'imagen_2'  => $request->imagen_2 ,'imagen_3'  => $request->imagen_3 ,'imagen_4'  => $request->imagen_4 ,'imagen_5'  => $request->imagen_5 ,'color_1'  => $request->color_1 ,'color_2'  => $request->color_2 ,'color_3'  => $request->color_3 ,'color_4'  => $request->color_4 ,'color_5'  => $request->color_5 ,'baner_1'  => $request->baner_1 ,'baner_2'  => $request->baner_2 ,'baner_3'  => $request->baner_3 ,'baner_4'  => $request->baner_4 ,'baner_5'  => $request->baner_5 , ] 
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
[ 'afiliado_id'  => $request->afiliado_id ,'logo_principal'  => $request->logo_principal ,'imagen_1'  => $request->imagen_1 ,'imagen_2'  => $request->imagen_2 ,'imagen_3'  => $request->imagen_3 ,'imagen_4'  => $request->imagen_4 ,'imagen_5'  => $request->imagen_5 ,'color_1'  => $request->color_1 ,'color_2'  => $request->color_2 ,'color_3'  => $request->color_3 ,'color_4'  => $request->color_4 ,'color_5'  => $request->color_5 ,'baner_1'  => $request->baner_1 ,'baner_2'  => $request->baner_2 ,'baner_3'  => $request->baner_3 ,'baner_4'  => $request->baner_4 ,'baner_5'  => $request->baner_5 , ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

