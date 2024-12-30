@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarDirecciones')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('direcciones.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="titulo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametitulo")</label><div class="col-md-6"><input id="titulo" type="text"  value="{{$registro->titulo}}" class="form-control" name="titulo" required></div></div>                     <div class="row mb-3">                            <label for="direccion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedireccion")</label><div class="col-md-6"><input id="direccion" type="text"  value="{{$registro->direccion}}" class="form-control" name="direccion" required></div></div>                     <div class="row mb-3">                            <label for="user_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuser_id")</label><div class="col-md-6"><input id="user_id" type="text"  value="{{$registro->user_id}}" class="form-control" name="user_id" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('direcciones.index') }}" class="btn btn-defaultchar" >
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
