@extends('layouts.app')
@section('content')
@foreach ($registros as $registro) 
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarRole')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('roles.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="cedula" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula")</label><div class="col-md-6"><input id="cedula" type="text"  value="{{$registro->cedula}}" class="form-control" name="cedula" required></div></div>                     <div class="row mb-3">                            <label for="apellidos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameapellidos")</label><div class="col-md-6"><input id="apellidos" type="text"  value="{{$registro->apellidos}}" class="form-control" name="apellidos" required></div></div>                     <div class="row mb-3">                            <label for="nombres" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombres")</label><div class="col-md-6"><input id="nombres" type="text"  value="{{$registro->nombres}}" class="form-control" name="nombres" required></div></div>                     <div class="row mb-3">                            <label for="sexo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesexo")</label><div class="col-md-6"><input id="sexo" type="text"  value="{{$registro->sexo}}" class="form-control" name="sexo" required></div></div>                     <div class="row mb-3">                            <label for="fnacimient" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefnacimient")</label><div class="col-md-6"><input id="fnacimient" type="text"  value="{{$registro->fnacimient}}" class="form-control" name="fnacimient" required></div></div>                     <div class="row mb-3">                            <label for="telefono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono")</label><div class="col-md-6"><input id="telefono" type="text"  value="{{$registro->telefono}}" class="form-control" name="telefono" required></div></div>                     <div class="row mb-3">                            <label for="codesegemp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodesegemp")</label><div class="col-md-6"><input id="codesegemp" type="text"  value="{{$registro->codesegemp}}" class="form-control" name="codesegemp" required></div></div>                     <div class="row mb-3">                            <label for="nhistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenhistoria")</label><div class="col-md-6"><input id="nhistoria" type="text"  value="{{$registro->nhistoria}}" class="form-control" name="nhistoria" required></div></div>                     <div class="row mb-3">                            <label for="ultconsu" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameultconsu")</label><div class="col-md-6"><input id="ultconsu" type="text"  value="{{$registro->ultconsu}}" class="form-control" name="ultconsu" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span> 
</a>
</div>
</div>
</form>
</p>
</div>
<div class="card-footer">
</div>
</div>
</div>
</div>
@endforeach
@endsection


