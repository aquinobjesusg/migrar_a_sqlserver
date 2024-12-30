@extends('dashboard1')
@section('content-table')
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearMigrations')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('migrations.store') }}">
@csrf
                     <div class="row mb-3">                            <label for="migration" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemigration")</label><div class="col-md-6"><input id="migration" type="text"  class="form-control" name="migration" required></div></div>                     <div class="row mb-3">                            <label for="batch" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebatch")</label><div class="col-md-6"><input id="batch" type="text"  class="form-control" name="batch" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('migrations.index') }}" class="btn btn-default" >
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
