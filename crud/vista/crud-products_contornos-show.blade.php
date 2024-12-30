@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="card">
<h5 class="card-header">
@lang('dicc.VerProducts_contornos')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="/tablas/roles">
@csrf
                     <div class="row mb-3">                            <label for="orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorden")</label><div class="col-md-6"><input id="orden" type="text" value="{{$registro->orden}}" class="form-control" name="orden" readonly></div></div>                     <div class="row mb-3">                            <label for="name_contorno" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename_contorno")</label><div class="col-md-6"><input id="name_contorno" type="text" value="{{$registro->name_contorno}}" class="form-control" name="name_contorno" readonly></div></div>                     <div class="row mb-3">                            <label for="sucursal_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesucursal_id")</label><div class="col-md-6"><input id="sucursal_id" type="text" value="{{$registro->sucursal_id}}" class="form-control" name="sucursal_id" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('products_contornos.index') }}" class="btn btn-default" >
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
@endforeach
@endsection
