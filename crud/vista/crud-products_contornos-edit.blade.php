@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarProducts_contornos')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('products_contornos.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorden")</label><div class="col-md-6"><input id="orden" type="text"  value="{{$registro->orden}}" class="form-control" name="orden" required></div></div>                     <div class="row mb-3">                            <label for="name_contorno" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename_contorno")</label><div class="col-md-6"><input id="name_contorno" type="text"  value="{{$registro->name_contorno}}" class="form-control" name="name_contorno" required></div></div>                     <div class="row mb-3">                            <label for="sucursal_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesucursal_id")</label><div class="col-md-6"><input id="sucursal_id" type="text"  value="{{$registro->sucursal_id}}" class="form-control" name="sucursal_id" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('products_contornos.index') }}" class="btn btn-defaultchar" >
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
