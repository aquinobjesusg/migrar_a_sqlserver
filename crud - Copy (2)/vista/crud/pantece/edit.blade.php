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
                     <div class="row mb-3">                            <label for="nhisto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenhisto")</label><div class="col-md-6"><input id="nhisto" type="text"  value="{{$registro->nhisto}}" class="form-control" name="nhisto" required></div></div>                     <div class="row mb-3">                            <label for="codante" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodante")</label><div class="col-md-6"><input id="codante" type="text"  value="{{$registro->codante}}" class="form-control" name="codante" required></div></div>                     <div class="row mb-3">                            <label for="detalle" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedetalle")</label><div class="col-md-6"><input id="detalle" type="text"  value="{{$registro->detalle}}" class="form-control" name="detalle" required></div></div>                     <div class="row mb-3">                            <label for="tipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo")</label><div class="col-md-6"><input id="tipo" type="text"  value="{{$registro->tipo}}" class="form-control" name="tipo" required></div></div>                     <div class="row mb-3">                            <label for="descrip" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescrip")</label><div class="col-md-6"><input id="descrip" type="text"  value="{{$registro->descrip}}" class="form-control" name="descrip" required></div></div>                     <div class="row mb-3">                            <label for="consul" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsul")</label><div class="col-md-6"><input id="consul" type="text"  value="{{$registro->consul}}" class="form-control" name="consul" required></div></div>
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


