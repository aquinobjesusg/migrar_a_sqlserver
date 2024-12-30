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
                     <div class="row mb-3">                            <label for="sistema_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesistema_id")</label><div class="col-md-6"><input id="sistema_id" type="text"  value="{{$registro->sistema_id}}" class="form-control" name="sistema_id" required></div></div>                     <div class="row mb-3">                            <label for="caso" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecaso")</label><div class="col-md-6"><input id="caso" type="text"  value="{{$registro->caso}}" class="form-control" name="caso" required></div></div>                     <div class="row mb-3">                            <label for="contexto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecontexto")</label><div class="col-md-6"><input id="contexto" type="text"  value="{{$registro->contexto}}" class="form-control" name="contexto" required></div></div>                     <div class="row mb-3">                            <label for="modulo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemodulo")</label><div class="col-md-6"><input id="modulo" type="text"  value="{{$registro->modulo}}" class="form-control" name="modulo" required></div></div>                     <div class="row mb-3">                            <label for="menu" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemenu")</label><div class="col-md-6"><input id="menu" type="text"  value="{{$registro->menu}}" class="form-control" name="menu" required></div></div>                     <div class="row mb-3">                            <label for="submenu" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesubmenu")</label><div class="col-md-6"><input id="submenu" type="text"  value="{{$registro->submenu}}" class="form-control" name="submenu" required></div></div>                     <div class="row mb-3">                            <label for="ordernum" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameordernum")</label><div class="col-md-6"><input id="ordernum" type="text"  value="{{$registro->ordernum}}" class="form-control" name="ordernum" required></div></div>                     <div class="row mb-3">                            <label for="ruta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameruta")</label><div class="col-md-6"><input id="ruta" type="text"  value="{{$registro->ruta}}" class="form-control" name="ruta" required></div></div>                     <div class="row mb-3">                            <label for="icon" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameicon")</label><div class="col-md-6"><input id="icon" type="text"  value="{{$registro->icon}}" class="form-control" name="icon" required></div></div>                     <div class="row mb-3">                            <label for="activo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameactivo")</label><div class="col-md-6"><input id="activo" type="text"  value="{{$registro->activo}}" class="form-control" name="activo" required></div></div>                     <div class="row mb-3">                            <label for="title" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametitle")</label><div class="col-md-6"><input id="title" type="text"  value="{{$registro->title}}" class="form-control" name="title" required></div></div>                     <div class="row mb-3">                            <label for="imagen" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimagen")</label><div class="col-md-6"><input id="imagen" type="text"  value="{{$registro->imagen}}" class="form-control" name="imagen" required></div></div>                     <div class="row mb-3">                            <label for="role" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerole")</label><div class="col-md-6"><input id="role" type="text"  value="{{$registro->role}}" class="form-control" name="role" required></div></div>
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


