@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="card">
<h5 class="card-header">
@lang('dicc.VerSub_categories')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="/tablas/roles">
@csrf
                     <div class="row mb-3">                            <label for="name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename")</label><div class="col-md-6"><input id="name" type="text" value="{{$registro->name}}" class="form-control" name="name" readonly></div></div>                     <div class="row mb-3">                            <label for="categoria_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecategoria_id")</label><div class="col-md-6"><input id="categoria_id" type="text" value="{{$registro->categoria_id}}" class="form-control" name="categoria_id" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('sub_categories.index') }}" class="btn btn-default" >
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
