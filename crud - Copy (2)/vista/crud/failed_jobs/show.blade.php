@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerFailed_jobs')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="uuid" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuuid")</label><div class="col-md-6"><input id="uuid" type="text" value="{{$registro->uuid}}" class="form-control" name="uuid" readonly></div></div>                     <div class="row mb-3">                            <label for="connection" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconnection")</label><div class="col-md-6"><input id="connection" type="text" value="{{$registro->connection}}" class="form-control" name="connection" readonly></div></div>                     <div class="row mb-3">                            <label for="queue" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namequeue")</label><div class="col-md-6"><input id="queue" type="text" value="{{$registro->queue}}" class="form-control" name="queue" readonly></div></div>
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
