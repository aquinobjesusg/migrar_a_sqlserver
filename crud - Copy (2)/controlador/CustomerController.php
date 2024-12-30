<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class CustomerController extends Controller
{
public $tabla = "customer";
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
[ 'fname'  => $request->fname ,'lname'  => $request->lname ,'address'  => $request->address ,'city'  => $request->city ,'company_name'  => $request->company_name ,'phone'  => $request->phone ,'telefono'  => $request->telefono ,'state'  => $request->state ,'zip'  => $request->zip ,'sms'  => $request->sms ,'email'  => $request->email  ] 
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
[ 'fname'  => $request->fname ,'lname'  => $request->lname ,'address'  => $request->address ,'city'  => $request->city ,'company_name'  => $request->company_name ,'phone'  => $request->phone ,'telefono'  => $request->telefono ,'state'  => $request->state ,'zip'  => $request->zip ,'sms'  => $request->sms ,'email'  => $request->email  ] 
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

