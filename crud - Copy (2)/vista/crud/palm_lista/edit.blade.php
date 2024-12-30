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
                     <div class="row mb-3">                            <label for="id_codigo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_codigo")</label><div class="col-md-6"><input id="id_codigo" type="text"  value="{{$registro->id_codigo}}" class="form-control" name="id_codigo" required></div></div>                     <div class="row mb-3">                            <label for="nombre_tabla" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre_tabla")</label><div class="col-md-6"><input id="nombre_tabla" type="text"  value="{{$registro->nombre_tabla}}" class="form-control" name="nombre_tabla" required></div></div>                     <div class="row mb-3">                            <label for="ordinal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameordinal")</label><div class="col-md-6"><input id="ordinal" type="text"  value="{{$registro->ordinal}}" class="form-control" name="ordinal" required></div></div>
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


