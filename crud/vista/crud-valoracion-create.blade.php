@extends('dashboard1')
@section('content-table')
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearValoracion')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('valoracion.store') }}">
@csrf
                     <div class="row mb-3">                            <label for="valor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namevalor")</label><div class="col-md-6"><input id="valor" type="text"  class="form-control" name="valor" required></div></div>                     <div class="row mb-3">                            <label for="user_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuser_id")</label><div class="col-md-6"><input id="user_id" type="text"  class="form-control" name="user_id" required></div></div>                     <div class="row mb-3">                            <label for="sucursal_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesucursal_id")</label><div class="col-md-6"><input id="sucursal_id" type="text"  class="form-control" name="sucursal_id" required></div></div>                     <div class="row mb-3">                            <label for="afiliado_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameafiliado_id")</label><div class="col-md-6"><input id="afiliado_id" type="text"  class="form-control" name="afiliado_id" required></div></div>                     <div class="row mb-3">                            <label for="delivery_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedelivery_id")</label><div class="col-md-6"><input id="delivery_id" type="text"  class="form-control" name="delivery_id" required></div></div>                     <div class="row mb-3">                            <label for="empresa_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameempresa_id")</label><div class="col-md-6"><input id="empresa_id" type="text"  class="form-control" name="empresa_id" required></div></div>                     <div class="row mb-3">                            <label for="producto_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameproducto_id")</label><div class="col-md-6"><input id="producto_id" type="text"  class="form-control" name="producto_id" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('valoracion.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">@lang('dicc.VerLista')</span>
</a>
</div>
</div>
</form>
</p>
</div>
<div class="card-footer">
</div>
</div>
@endsection
