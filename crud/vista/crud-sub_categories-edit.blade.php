@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarSub_categories')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('sub_categories.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename")</label><div class="col-md-6"><input id="name" type="text"  value="{{$registro->name}}" class="form-control" name="name" required></div></div>                     <div class="row mb-3">                            <label for="categoria_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecategoria_id")</label><div class="col-md-6"><input id="categoria_id" type="text"  value="{{$registro->categoria_id}}" class="form-control" name="categoria_id" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('sub_categories.index') }}" class="btn btn-defaultchar" >
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
