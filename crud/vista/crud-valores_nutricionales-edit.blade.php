@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarValores_nutricionales')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('valores_nutricionales.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename")</label><div class="col-md-6"><input id="name" type="text"  value="{{$registro->name}}" class="form-control" name="name" required></div></div>                     <div class="row mb-3">                            <label for="valor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namevalor")</label><div class="col-md-6"><input id="valor" type="text"  value="{{$registro->valor}}" class="form-control" name="valor" required></div></div>                     <div class="row mb-3">                            <label for="activo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameactivo")</label><div class="col-md-6"><input id="activo" type="text"  value="{{$registro->activo}}" class="form-control" name="activo" required></div></div>                     <div class="row mb-3">                            <label for="sucursal_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesucursal_id")</label><div class="col-md-6"><input id="sucursal_id" type="text"  value="{{$registro->sucursal_id}}" class="form-control" name="sucursal_id" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('valores_nutricionales.index') }}" class="btn btn-defaultchar" >
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
