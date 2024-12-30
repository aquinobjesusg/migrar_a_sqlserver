@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarValoracion_usuario')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('valoracion_usuario.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="valor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namevalor")</label><div class="col-md-6"><input id="valor" type="text"  value="{{$registro->valor}}" class="form-control" name="valor" required></div></div>                     <div class="row mb-3">                            <label for="sucursal_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesucursal_id")</label><div class="col-md-6"><input id="sucursal_id" type="text"  value="{{$registro->sucursal_id}}" class="form-control" name="sucursal_id" required></div></div>                     <div class="row mb-3">                            <label for="afiliado_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameafiliado_id")</label><div class="col-md-6"><input id="afiliado_id" type="text"  value="{{$registro->afiliado_id}}" class="form-control" name="afiliado_id" required></div></div>                     <div class="row mb-3">                            <label for="delivery_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedelivery_id")</label><div class="col-md-6"><input id="delivery_id" type="text"  value="{{$registro->delivery_id}}" class="form-control" name="delivery_id" required></div></div>                     <div class="row mb-3">                            <label for="empresa_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameempresa_id")</label><div class="col-md-6"><input id="empresa_id" type="text"  value="{{$registro->empresa_id}}" class="form-control" name="empresa_id" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('valoracion_usuario.index') }}" class="btn btn-defaultchar" >
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
