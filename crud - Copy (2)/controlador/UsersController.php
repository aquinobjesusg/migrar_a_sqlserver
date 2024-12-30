<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class UsersController extends Controller
{
public $tabla = "users";
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
[ 'name'  => $request->name ,'email'  => $request->email ,'email_verified_at'  => $request->email_verified_at ,'password'  => $request->password ,'two_factor_secret'  => $request->two_factor_secret ,'two_factor_recovery_codes'  => $request->two_factor_recovery_codes ,'remember_token'  => $request->remember_token ,'avatar'  => $request->avatar ,'role'  => $request->role ,'in_medico'  => $request->in_medico ,'in_paciente'  => $request->in_paciente ,'activo'  => $request->activo  ] 
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
[ 'name'  => $request->name ,'email'  => $request->email ,'email_verified_at'  => $request->email_verified_at ,'password'  => $request->password ,'two_factor_secret'  => $request->two_factor_secret ,'two_factor_recovery_codes'  => $request->two_factor_recovery_codes ,'remember_token'  => $request->remember_token ,'avatar'  => $request->avatar ,'role'  => $request->role ,'in_medico'  => $request->in_medico ,'in_paciente'  => $request->in_paciente ,'activo'  => $request->activo  ] 
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

