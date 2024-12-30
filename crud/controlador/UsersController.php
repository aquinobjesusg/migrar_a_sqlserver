<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Users;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
public $tabla = "users";
public $vista = "cruds.crud-users-";
public $ruta = "users";
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
[ 'id'  => $id ,'name'  => $request->name ,'email'  => $request->email ,'email_verified_at'  => $request->email_verified_at ,'password'  => $request->password ,'two_factor_secret'  => $request->two_factor_secret ,'two_factor_recovery_codes'  => $request->two_factor_recovery_codes ,'remember_token'  => $request->remember_token ,'avatar'  => $request->avatar ,'role'  => $request->role ,'afiliado_id'  => $request->afiliado_id ,'role_id'  => $request->role_id ,'sucursal_id'  => $request->sucursal_id ,'empresa_id'  => $request->empresa_id ,'tipo_usuario'  => $request->tipo_usuario ,'delivery_id'  => $request->delivery_id  ] 
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
[ 'name'  => $request->name ,'email'  => $request->email ,'email_verified_at'  => $request->email_verified_at ,'password'  => $request->password ,'two_factor_secret'  => $request->two_factor_secret ,'two_factor_recovery_codes'  => $request->two_factor_recovery_codes ,'remember_token'  => $request->remember_token ,'avatar'  => $request->avatar ,'role'  => $request->role ,'afiliado_id'  => $request->afiliado_id ,'role_id'  => $request->role_id ,'sucursal_id'  => $request->sucursal_id ,'empresa_id'  => $request->empresa_id ,'tipo_usuario'  => $request->tipo_usuario ,'delivery_id'  => $request->delivery_id  ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

