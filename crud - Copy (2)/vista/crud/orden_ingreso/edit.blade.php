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
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  value="{{$registro->historia}}" class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  value="{{$registro->consulta}}" class="form-control" name="consulta" required></div></div>                     <div class="row mb-3">                            <label for="fecha_operacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_operacion")</label><div class="col-md-6"><input id="fecha_operacion" type="text"  value="{{$registro->fecha_operacion}}" class="form-control" name="fecha_operacion" required></div></div>                     <div class="row mb-3">                            <label for="fecha_reporte" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_reporte")</label><div class="col-md-6"><input id="fecha_reporte" type="text"  value="{{$registro->fecha_reporte}}" class="form-control" name="fecha_reporte" required></div></div>                     <div class="row mb-3">                            <label for="texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametexto")</label><div class="col-md-6"><input id="texto" type="text"  value="{{$registro->texto}}" class="form-control" name="texto" required></div></div>                     <div class="row mb-3">                            <label for="idx" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameidx")</label><div class="col-md-6"><input id="idx" type="text"  value="{{$registro->idx}}" class="form-control" name="idx" required></div></div>                     <div class="row mb-3">                            <label for="reco_ingresar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_ingresar")</label><div class="col-md-6"><input id="reco_ingresar" type="text"  value="{{$registro->reco_ingresar}}" class="form-control" name="reco_ingresar" required></div></div>                     <div class="row mb-3">                            <label for="reco_depi" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_depi")</label><div class="col-md-6"><input id="reco_depi" type="text"  value="{{$registro->reco_depi}}" class="form-control" name="reco_depi" required></div></div>                     <div class="row mb-3">                            <label for="reco_llevar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_llevar")</label><div class="col-md-6"><input id="reco_llevar" type="text"  value="{{$registro->reco_llevar}}" class="form-control" name="reco_llevar" required></div></div>                     <div class="row mb-3">                            <label for="reco_cedroxin" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_cedroxin")</label><div class="col-md-6"><input id="reco_cedroxin" type="text"  value="{{$registro->reco_cedroxin}}" class="form-control" name="reco_cedroxin" required></div></div>                     <div class="row mb-3">                            <label for="reco_ejercicios" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_ejercicios")</label><div class="col-md-6"><input id="reco_ejercicios" type="text"  value="{{$registro->reco_ejercicios}}" class="form-control" name="reco_ejercicios" required></div></div>                     <div class="row mb-3">                            <label for="reco_terapia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_terapia")</label><div class="col-md-6"><input id="reco_terapia" type="text"  value="{{$registro->reco_terapia}}" class="form-control" name="reco_terapia" required></div></div>                     <div class="row mb-3">                            <label for="reco_control" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_control")</label><div class="col-md-6"><input id="reco_control" type="text"  value="{{$registro->reco_control}}" class="form-control" name="reco_control" required></div></div>                     <div class="row mb-3">                            <label for="reco_higiene" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_higiene")</label><div class="col-md-6"><input id="reco_higiene" type="text"  value="{{$registro->reco_higiene}}" class="form-control" name="reco_higiene" required></div></div>                     <div class="row mb-3">                            <label for="reco_ropa" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_ropa")</label><div class="col-md-6"><input id="reco_ropa" type="text"  value="{{$registro->reco_ropa}}" class="form-control" name="reco_ropa" required></div></div>                     <div class="row mb-3">                            <label for="reco_tomar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_tomar")</label><div class="col-md-6"><input id="reco_tomar" type="text"  value="{{$registro->reco_tomar}}" class="form-control" name="reco_tomar" required></div></div>                     <div class="row mb-3">                            <label for="reco_clexane" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_clexane")</label><div class="col-md-6"><input id="reco_clexane" type="text"  value="{{$registro->reco_clexane}}" class="form-control" name="reco_clexane" required></div></div>                     <div class="row mb-3">                            <label for="reco_ejercicios_res" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_ejercicios_res")</label><div class="col-md-6"><input id="reco_ejercicios_res" type="text"  value="{{$registro->reco_ejercicios_res}}" class="form-control" name="reco_ejercicios_res" required></div></div>                     <div class="row mb-3">                            <label for="reco_sangre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_sangre")</label><div class="col-md-6"><input id="reco_sangre" type="text"  value="{{$registro->reco_sangre}}" class="form-control" name="reco_sangre" required></div></div>                     <div class="row mb-3">                            <label for="reco_avisar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereco_avisar")</label><div class="col-md-6"><input id="reco_avisar" type="text"  value="{{$registro->reco_avisar}}" class="form-control" name="reco_avisar" required></div></div>                     <div class="row mb-3">                            <label for="detalle" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedetalle")</label><div class="col-md-6"><input id="detalle" type="text"  value="{{$registro->detalle}}" class="form-control" name="detalle" required></div></div>
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


