@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearP_epecial')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="codespe" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodespe")</label><div class="col-md-6"><input id="codespe" type="text"  class="form-control" name="codespe" required></div></div>                     <div class="row mb-3">                            <label for="especiali" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameespeciali")</label><div class="col-md-6"><input id="especiali" type="text"  class="form-control" name="especiali" required></div></div>
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
