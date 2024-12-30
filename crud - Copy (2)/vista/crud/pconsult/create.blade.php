@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearPconsult')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="nconsul" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenconsul")</label><div class="col-md-6"><input id="nconsul" type="text"  class="form-control" name="nconsul" required></div></div>                     <div class="row mb-3">                            <label for="nhisto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenhisto")</label><div class="col-md-6"><input id="nhisto" type="text"  class="form-control" name="nhisto" required></div></div>                     <div class="row mb-3">                            <label for="enfactual" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameenfactual")</label><div class="col-md-6"><input id="enfactual" type="text"  class="form-control" name="enfactual" required></div></div>                     <div class="row mb-3">                            <label for="evolu" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameevolu")</label><div class="col-md-6"><input id="evolu" type="text"  class="form-control" name="evolu" required></div></div>                     <div class="row mb-3">                            <label for="tratami" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametratami")</label><div class="col-md-6"><input id="tratami" type="text"  class="form-control" name="tratami" required></div></div>                     <div class="row mb-3">                            <label for="exa_fi" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameexa_fi")</label><div class="col-md-6"><input id="exa_fi" type="text"  class="form-control" name="exa_fi" required></div></div>                     <div class="row mb-3">                            <label for="image" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimage")</label><div class="col-md-6"><input id="image" type="text"  class="form-control" name="image" required></div></div>
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
