@extends('dashboard1')
@section('content-table')
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearMetodos_pago')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('metodos_pago.store') }}">
@csrf
                     <div class="row mb-3">                            <label for="titulo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametitulo")</label><div class="col-md-6"><input id="titulo" type="text"  class="form-control" name="titulo" required></div></div>                     <div class="row mb-3">                            <label for="icono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameicono")</label><div class="col-md-6"><input id="icono" type="text"  class="form-control" name="icono" required></div></div>                     <div class="row mb-3">                            <label for="user_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuser_id")</label><div class="col-md-6"><input id="user_id" type="text"  class="form-control" name="user_id" required></div></div>                     <div class="row mb-3">                            <label for="sucursal_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesucursal_id")</label><div class="col-md-6"><input id="sucursal_id" type="text"  class="form-control" name="sucursal_id" required></div></div>                     <div class="row mb-3">                            <label for="afiliado_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameafiliado_id")</label><div class="col-md-6"><input id="afiliado_id" type="text"  class="form-control" name="afiliado_id" required></div></div>                     <div class="row mb-3">                            <label for="delivery_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedelivery_id")</label><div class="col-md-6"><input id="delivery_id" type="text"  class="form-control" name="delivery_id" required></div></div>                     <div class="row mb-3">                            <label for="empresa_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameempresa_id")</label><div class="col-md-6"><input id="empresa_id" type="text"  class="form-control" name="empresa_id" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('metodos_pago.index') }}" class="btn btn-default" >
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
