@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPconsult')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nconsul" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenconsul")</label><div class="col-md-6"><input id="nconsul" type="text" value="{{$registro->nconsul}}" class="form-control" name="nconsul" readonly></div></div>                     <div class="row mb-3">                            <label for="nhisto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenhisto")</label><div class="col-md-6"><input id="nhisto" type="text" value="{{$registro->nhisto}}" class="form-control" name="nhisto" readonly></div></div>                     <div class="row mb-3">                            <label for="enfactual" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameenfactual")</label><div class="col-md-6"><input id="enfactual" type="text" value="{{$registro->enfactual}}" class="form-control" name="enfactual" readonly></div></div>                     <div class="row mb-3">                            <label for="evolu" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameevolu")</label><div class="col-md-6"><input id="evolu" type="text" value="{{$registro->evolu}}" class="form-control" name="evolu" readonly></div></div>                     <div class="row mb-3">                            <label for="tratami" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametratami")</label><div class="col-md-6"><input id="tratami" type="text" value="{{$registro->tratami}}" class="form-control" name="tratami" readonly></div></div>                     <div class="row mb-3">                            <label for="exa_fi" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameexa_fi")</label><div class="col-md-6"><input id="exa_fi" type="text" value="{{$registro->exa_fi}}" class="form-control" name="exa_fi" readonly></div></div>                     <div class="row mb-3">                            <label for="image" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimage")</label><div class="col-md-6"><input id="image" type="text" value="{{$registro->image}}" class="form-control" name="image" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span>
</a>
</div>
</div>
</p>
</div>
<div class="card-footer">
</div>
</div>
</div>
</div>
@endforeach
@endsection
