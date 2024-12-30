@extends('dashboard1')
@section('content-table')
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearProducts_componentes')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('products_componentes.store') }}">
@csrf
                     <div class="row mb-3">                            <label for="orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorden")</label><div class="col-md-6"><input id="orden" type="text"  class="form-control" name="orden" required></div></div>                     <div class="row mb-3">                            <label for="name_component" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename_component")</label><div class="col-md-6"><input id="name_component" type="text"  class="form-control" name="name_component" required></div></div>                     <div class="row mb-3">                            <label for="produt_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprodut_id")</label><div class="col-md-6"><input id="produt_id" type="text"  class="form-control" name="produt_id" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('products_componentes.index') }}" class="btn btn-default" >
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
