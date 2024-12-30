@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPersonal_access_tokens')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="tokenable_type" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametokenable_type")</label><div class="col-md-6"><input id="tokenable_type" type="text" value="{{$registro->tokenable_type}}" class="form-control" name="tokenable_type" readonly></div></div>                     <div class="row mb-3">                            <label for="tokenable_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametokenable_id")</label><div class="col-md-6"><input id="tokenable_id" type="text" value="{{$registro->tokenable_id}}" class="form-control" name="tokenable_id" readonly></div></div>                     <div class="row mb-3">                            <label for="name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename")</label><div class="col-md-6"><input id="name" type="text" value="{{$registro->name}}" class="form-control" name="name" readonly></div></div>                     <div class="row mb-3">                            <label for="token" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametoken")</label><div class="col-md-6"><input id="token" type="text" value="{{$registro->token}}" class="form-control" name="token" readonly></div></div>                     <div class="row mb-3">                            <label for="abilities" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameabilities")</label><div class="col-md-6"><input id="abilities" type="text" value="{{$registro->abilities}}" class="form-control" name="abilities" readonly></div></div>                     <div class="row mb-3">                            <label for="last_used_at" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelast_used_at")</label><div class="col-md-6"><input id="last_used_at" type="text" value="{{$registro->last_used_at}}" class="form-control" name="last_used_at" readonly></div></div>                     <div class="row mb-3">                            <label for="expires_at" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameexpires_at")</label><div class="col-md-6"><input id="expires_at" type="text" value="{{$registro->expires_at}}" class="form-control" name="expires_at" readonly></div></div>
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
