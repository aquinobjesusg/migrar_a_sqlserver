<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Productores;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class ProductoresController extends Controller
{
public $tabla = "productores";
public $vista = "cruds.crud-productores-";
public $ruta = "productores";
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
[ 'id'  => $id ,'codigo'  => $request->codigo ,'nombre'  => $request->nombre , ] 
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
[ 'codigo'  => $request->codigo ,'nombre'  => $request->nombre , ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

