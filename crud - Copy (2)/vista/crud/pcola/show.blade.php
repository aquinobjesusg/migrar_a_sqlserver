@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPcola')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="atendido" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameatendido")</label><div class="col-md-6"><input id="atendido" type="text" value="{{$registro->atendido}}" class="form-control" name="atendido" readonly></div></div>                     <div class="row mb-3">                            <label for="conse" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconse")</label><div class="col-md-6"><input id="conse" type="text" value="{{$registro->conse}}" class="form-control" name="conse" readonly></div></div>                     <div class="row mb-3">                            <label for="estado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestado")</label><div class="col-md-6"><input id="estado" type="text" value="{{$registro->estado}}" class="form-control" name="estado" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text" value="{{$registro->fecha}}" class="form-control" name="fecha" readonly></div></div>                     <div class="row mb-3">                            <label for="hora_fin" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora_fin")</label><div class="col-md-6"><input id="hora_fin" type="text" value="{{$registro->hora_fin}}" class="form-control" name="hora_fin" readonly></div></div>                     <div class="row mb-3">                            <label for="hora_ini" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora_ini")</label><div class="col-md-6"><input id="hora_ini" type="text" value="{{$registro->hora_ini}}" class="form-control" name="hora_ini" readonly></div></div>                     <div class="row mb-3">                            <label for="medico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico")</label><div class="col-md-6"><input id="medico" type="text" value="{{$registro->medico}}" class="form-control" name="medico" readonly></div></div>                     <div class="row mb-3">                            <label for="motivo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemotivo")</label><div class="col-md-6"><input id="motivo" type="text" value="{{$registro->motivo}}" class="form-control" name="motivo" readonly></div></div>                     <div class="row mb-3">                            <label for="nhistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenhistoria")</label><div class="col-md-6"><input id="nhistoria" type="text" value="{{$registro->nhistoria}}" class="form-control" name="nhistoria" readonly></div></div>                     <div class="row mb-3">                            <label for="numorden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumorden")</label><div class="col-md-6"><input id="numorden" type="text" value="{{$registro->numorden}}" class="form-control" name="numorden" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo")</label><div class="col-md-6"><input id="tipo" type="text" value="{{$registro->tipo}}" class="form-control" name="tipo" readonly></div></div>                     <div class="row mb-3">                            <label for="turno" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameturno")</label><div class="col-md-6"><input id="turno" type="text" value="{{$registro->turno}}" class="form-control" name="turno" readonly></div></div>                     <div class="row mb-3">                            <label for="fechac" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefechac")</label><div class="col-md-6"><input id="fechac" type="text" value="{{$registro->fechac}}" class="form-control" name="fechac" readonly></div></div>
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
