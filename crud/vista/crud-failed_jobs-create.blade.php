@extends('dashboard1')
@section('content-table')
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearFailed_jobs')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('failed_jobs.store') }}">
@csrf
                     <div class="row mb-3">                            <label for="uuid" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuuid")</label><div class="col-md-6"><input id="uuid" type="text"  class="form-control" name="uuid" required></div></div>                     <div class="row mb-3">                            <label for="connection" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconnection")</label><div class="col-md-6"><input id="connection" type="text"  class="form-control" name="connection" required></div></div>                     <div class="row mb-3">                            <label for="queue" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namequeue")</label><div class="col-md-6"><input id="queue" type="text"  class="form-control" name="queue" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('failed_jobs.index') }}" class="btn btn-default" >
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
@endsection
