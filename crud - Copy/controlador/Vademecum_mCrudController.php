<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Vademecum_m;
use Session;
use DB;

class Vademecum_mCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Vademecum_m::all();
        return view('crud/crudvademecum_m/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Vademecum_m';
        return view('crud/crudvademecum_m/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Vademecum_m::create([
        'codemedicina'=>$request->codemedicina,
        'nombregenerico'=>$request->nombregenerico,
        'nombrecomercial'=>$request->nombrecomercial,
        'dosificacion'=>$request->dosificacion,
        'uso'=>$request->uso,
        'presentacion'=>$request->presentacion,
        'concentracion'=>$request->concentracion,
        'cada'=>$request->cada,
        'durante'=>$request->durante,
        'pvc'=>$request->pvc,
        'pvs'=>$request->pvs,
        'dosis'=>$request->dosis,
        'sico'=>$request->sico,
        'nombrecomercial1'=>$request->nombrecomercial1,
        'nombrecomercial2'=>$request->nombrecomercial2,
        'nombrecomercial3'=>$request->nombrecomercial3,
        'totalre'=>$request->totalre,
        'sicome'=>$request->sicome,
        'sicome1'=>$request->sicome1,
        'sicome2'=>$request->sicome2,
        'sicome3'=>$request->sicome3,
        ]);
        return redirect('/Cruds/Vademecum_m/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Vademecum_m::where('id','=',$id)->first();
        return view('crud/crudvademecum_m/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Vademecum_m::Find($id);

        $grabar->codemedicina=$request->codemedicina;
        $grabar->nombregenerico=$request->nombregenerico;
        $grabar->nombrecomercial=$request->nombrecomercial;
        $grabar->dosificacion=$request->dosificacion;
        $grabar->uso=$request->uso;
        $grabar->presentacion=$request->presentacion;
        $grabar->concentracion=$request->concentracion;
        $grabar->cada=$request->cada;
        $grabar->durante=$request->durante;
        $grabar->pvc=$request->pvc;
        $grabar->pvs=$request->pvs;
        $grabar->dosis=$request->dosis;
        $grabar->sico=$request->sico;
        $grabar->nombrecomercial1=$request->nombrecomercial1;
        $grabar->nombrecomercial2=$request->nombrecomercial2;
        $grabar->nombrecomercial3=$request->nombrecomercial3;
        $grabar->totalre=$request->totalre;
        $grabar->sicome=$request->sicome;
        $grabar->sicome1=$request->sicome1;
        $grabar->sicome2=$request->sicome2;
        $grabar->sicome3=$request->sicome3;

        $grabar->save();

        return redirect('/Cruds/Vademecum_m/lista');
    }

    public function destroy($id)
    {
        Vademecum_m::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Vademecum_m/lista');
    }


 
}

