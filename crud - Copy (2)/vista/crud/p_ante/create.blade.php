@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearP_ante')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="codante" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodante")</label><div class="col-md-6"><input id="codante" type="text"  class="form-control" name="codante" required></div></div>                     <div class="row mb-3">                            <label for="codtipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodtipo")</label><div class="col-md-6"><input id="codtipo" type="text"  class="form-control" name="codtipo" required></div></div>                     <div class="row mb-3">                            <label for="descrip" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescrip")</label><div class="col-md-6"><input id="descrip" type="text"  class="form-control" name="descrip" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
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
</div>
</div>
@endsection
