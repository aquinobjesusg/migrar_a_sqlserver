@extends('layouts.app')
@section('content')
@foreach ($registros as $registro) 
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarRole')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('roles.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="pbe_name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbe_name")</label><div class="col-md-6"><input id="pbe_name" type="text"  value="{{$registro->pbe_name}}" class="form-control" name="pbe_name" required></div></div>                     <div class="row mb-3">                            <label for="pbe_edit" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbe_edit")</label><div class="col-md-6"><input id="pbe_edit" type="text"  value="{{$registro->pbe_edit}}" class="form-control" name="pbe_edit" required></div></div>                     <div class="row mb-3">                            <label for="pbe_type" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbe_type")</label><div class="col-md-6"><input id="pbe_type" type="text"  value="{{$registro->pbe_type}}" class="form-control" name="pbe_type" required></div></div>                     <div class="row mb-3">                            <label for="pbe_cntr" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbe_cntr")</label><div class="col-md-6"><input id="pbe_cntr" type="text"  value="{{$registro->pbe_cntr}}" class="form-control" name="pbe_cntr" required></div></div>                     <div class="row mb-3">                            <label for="pbe_seqn" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbe_seqn")</label><div class="col-md-6"><input id="pbe_seqn" type="text"  value="{{$registro->pbe_seqn}}" class="form-control" name="pbe_seqn" required></div></div>                     <div class="row mb-3">                            <label for="pbe_flag" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbe_flag")</label><div class="col-md-6"><input id="pbe_flag" type="text"  value="{{$registro->pbe_flag}}" class="form-control" name="pbe_flag" required></div></div>                     <div class="row mb-3">                            <label for="pbe_work" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbe_work")</label><div class="col-md-6"><input id="pbe_work" type="text"  value="{{$registro->pbe_work}}" class="form-control" name="pbe_work" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
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


