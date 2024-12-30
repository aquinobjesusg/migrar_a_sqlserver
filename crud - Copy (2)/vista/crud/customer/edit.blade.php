@extends('layouts.app')
@section('content')
@foreach ($registros as $registro) 
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarRole')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('roles.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="fname" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefname")</label><div class="col-md-6"><input id="fname" type="text"  value="{{$registro->fname}}" class="form-control" name="fname" required></div></div>                     <div class="row mb-3">                            <label for="lname" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelname")</label><div class="col-md-6"><input id="lname" type="text"  value="{{$registro->lname}}" class="form-control" name="lname" required></div></div>                     <div class="row mb-3">                            <label for="address" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameaddress")</label><div class="col-md-6"><input id="address" type="text"  value="{{$registro->address}}" class="form-control" name="address" required></div></div>                     <div class="row mb-3">                            <label for="city" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecity")</label><div class="col-md-6"><input id="city" type="text"  value="{{$registro->city}}" class="form-control" name="city" required></div></div>                     <div class="row mb-3">                            <label for="company_name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecompany_name")</label><div class="col-md-6"><input id="company_name" type="text"  value="{{$registro->company_name}}" class="form-control" name="company_name" required></div></div>                     <div class="row mb-3">                            <label for="phone" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namephone")</label><div class="col-md-6"><input id="phone" type="text"  value="{{$registro->phone}}" class="form-control" name="phone" required></div></div>                     <div class="row mb-3">                            <label for="telefono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono")</label><div class="col-md-6"><input id="telefono" type="text"  value="{{$registro->telefono}}" class="form-control" name="telefono" required></div></div>                     <div class="row mb-3">                            <label for="state" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestate")</label><div class="col-md-6"><input id="state" type="text"  value="{{$registro->state}}" class="form-control" name="state" required></div></div>                     <div class="row mb-3">                            <label for="zip" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namezip")</label><div class="col-md-6"><input id="zip" type="text"  value="{{$registro->zip}}" class="form-control" name="zip" required></div></div>                     <div class="row mb-3">                            <label for="sms" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesms")</label><div class="col-md-6"><input id="sms" type="text"  value="{{$registro->sms}}" class="form-control" name="sms" required></div></div>                     <div class="row mb-3">                            <label for="email" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemail")</label><div class="col-md-6"><input id="email" type="text"  value="{{$registro->email}}" class="form-control" name="email" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span> 
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
@endforeach
@endsection


