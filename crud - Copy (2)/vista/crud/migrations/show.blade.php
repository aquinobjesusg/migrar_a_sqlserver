@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerMigrations')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="migration" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemigration")</label><div class="col-md-6"><input id="migration" type="text" value="{{$registro->migration}}" class="form-control" name="migration" readonly></div></div>                     <div class="row mb-3">                            <label for="batch" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebatch")</label><div class="col-md-6"><input id="batch" type="text" value="{{$registro->batch}}" class="form-control" name="batch" readonly></div></div>
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
