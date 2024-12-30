@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearPvademe')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="codmedi" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodmedi")</label><div class="col-md-6"><input id="codmedi" type="text"  class="form-control" name="codmedi" required></div></div>                     <div class="row mb-3">                            <label for="nombrege" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombrege")</label><div class="col-md-6"><input id="nombrege" type="text"  class="form-control" name="nombrege" required></div></div>                     <div class="row mb-3">                            <label for="nombreco" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombreco")</label><div class="col-md-6"><input id="nombreco" type="text"  class="form-control" name="nombreco" required></div></div>                     <div class="row mb-3">                            <label for="dosifi" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedosifi")</label><div class="col-md-6"><input id="dosifi" type="text"  class="form-control" name="dosifi" required></div></div>                     <div class="row mb-3">                            <label for="uso" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuso")</label><div class="col-md-6"><input id="uso" type="text"  class="form-control" name="uso" required></div></div>                     <div class="row mb-3">                            <label for="presenta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepresenta")</label><div class="col-md-6"><input id="presenta" type="text"  class="form-control" name="presenta" required></div></div>
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
