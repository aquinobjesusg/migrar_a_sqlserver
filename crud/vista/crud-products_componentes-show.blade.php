@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="card">
<h5 class="card-header">
@lang('dicc.VerProducts_componentes')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="/tablas/roles">
@csrf
                     <div class="row mb-3">                            <label for="orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorden")</label><div class="col-md-6"><input id="orden" type="text" value="{{$registro->orden}}" class="form-control" name="orden" readonly></div></div>                     <div class="row mb-3">                            <label for="name_component" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename_component")</label><div class="col-md-6"><input id="name_component" type="text" value="{{$registro->name_component}}" class="form-control" name="name_component" readonly></div></div>                     <div class="row mb-3">                            <label for="produt_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprodut_id")</label><div class="col-md-6"><input id="produt_id" type="text" value="{{$registro->produt_id}}" class="form-control" name="produt_id" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('products_componentes.index') }}" class="btn btn-default" >
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
