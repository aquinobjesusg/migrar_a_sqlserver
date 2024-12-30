@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPrecipe')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nhisto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenhisto")</label><div class="col-md-6"><input id="nhisto" type="text" value="{{$registro->nhisto}}" class="form-control" name="nhisto" readonly></div></div>                     <div class="row mb-3">                            <label for="nconsul" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenconsul")</label><div class="col-md-6"><input id="nconsul" type="text" value="{{$registro->nconsul}}" class="form-control" name="nconsul" readonly></div></div>                     <div class="row mb-3">                            <label for="codmedi" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodmedi")</label><div class="col-md-6"><input id="codmedi" type="text" value="{{$registro->codmedi}}" class="form-control" name="codmedi" readonly></div></div>                     <div class="row mb-3">                            <label for="indicacio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameindicacio")</label><div class="col-md-6"><input id="indicacio" type="text" value="{{$registro->indicacio}}" class="form-control" name="indicacio" readonly></div></div>
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
