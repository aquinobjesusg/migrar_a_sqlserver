@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPresupuesto')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="cedula" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula")</label><div class="col-md-6"><input id="cedula" type="text" value="{{$registro->cedula}}" class="form-control" name="cedula" readonly></div></div>                     <div class="row mb-3">                            <label for="nombre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre")</label><div class="col-md-6"><input id="nombre" type="text" value="{{$registro->nombre}}" class="form-control" name="nombre" readonly></div></div>                     <div class="row mb-3">                            <label for="direccion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedireccion")</label><div class="col-md-6"><input id="direccion" type="text" value="{{$registro->direccion}}" class="form-control" name="direccion" readonly></div></div>                     <div class="row mb-3">                            <label for="telefono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono")</label><div class="col-md-6"><input id="telefono" type="text" value="{{$registro->telefono}}" class="form-control" name="telefono" readonly></div></div>                     <div class="row mb-3">                            <label for="nropresupuesto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenropresupuesto")</label><div class="col-md-6"><input id="nropresupuesto" type="text" value="{{$registro->nropresupuesto}}" class="form-control" name="nropresupuesto" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text" value="{{$registro->fecha}}" class="form-control" name="fecha" readonly></div></div>                     <div class="row mb-3">                            <label for="cliente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecliente")</label><div class="col-md-6"><input id="cliente" type="text" value="{{$registro->cliente}}" class="form-control" name="cliente" readonly></div></div>                     <div class="row mb-3">                            <label for="nota" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenota")</label><div class="col-md-6"><input id="nota" type="text" value="{{$registro->nota}}" class="form-control" name="nota" readonly></div></div>                     <div class="row mb-3">                            <label for="numhistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumhistoria")</label><div class="col-md-6"><input id="numhistoria" type="text" value="{{$registro->numhistoria}}" class="form-control" name="numhistoria" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span>
</a>
</div>
</div>
</p>
</div>
<div class="card-footer">
</div>
</div>
</div>
</div>
@endforeach
@endsection
