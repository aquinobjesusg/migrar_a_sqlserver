@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearOrtopedia')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text"  class="form-control" name="nrohistoria" required></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text"  class="form-control" name="nroconsulta" required></div></div>                     <div class="row mb-3">                            <label for="botas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebotas")</label><div class="col-md-6"><input id="botas" type="text"  class="form-control" name="botas" required></div></div>                     <div class="row mb-3">                            <label for="zapatos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namezapatos")</label><div class="col-md-6"><input id="zapatos" type="text"  class="form-control" name="zapatos" required></div></div>                     <div class="row mb-3">                            <label for="soporte" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesoporte")</label><div class="col-md-6"><input id="soporte" type="text"  class="form-control" name="soporte" required></div></div>                     <div class="row mb-3">                            <label for="thomas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namethomas")</label><div class="col-md-6"><input id="thomas" type="text"  class="form-control" name="thomas" required></div></div>                     <div class="row mb-3">                            <label for="normal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenormal")</label><div class="col-md-6"><input id="normal" type="text"  class="form-control" name="normal" required></div></div>                     <div class="row mb-3">                            <label for="tacon_int" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametacon_int")</label><div class="col-md-6"><input id="tacon_int" type="text"  class="form-control" name="tacon_int" required></div></div>                     <div class="row mb-3">                            <label for="tacon_ext" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametacon_ext")</label><div class="col-md-6"><input id="tacon_ext" type="text"  class="form-control" name="tacon_ext" required></div></div>                     <div class="row mb-3">                            <label for="suela_int" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesuela_int")</label><div class="col-md-6"><input id="suela_int" type="text"  class="form-control" name="suela_int" required></div></div>                     <div class="row mb-3">                            <label for="suela_ext" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesuela_ext")</label><div class="col-md-6"><input id="suela_ext" type="text"  class="form-control" name="suela_ext" required></div></div>                     <div class="row mb-3">                            <label for="borde_int_rect" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameborde_int_rect")</label><div class="col-md-6"><input id="borde_int_rect" type="text"  class="form-control" name="borde_int_rect" required></div></div>                     <div class="row mb-3">                            <label for="borde_int_abdu" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameborde_int_abdu")</label><div class="col-md-6"><input id="borde_int_abdu" type="text"  class="form-control" name="borde_int_abdu" required></div></div>                     <div class="row mb-3">                            <label for="suela_normal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesuela_normal")</label><div class="col-md-6"><input id="suela_normal" type="text"  class="form-control" name="suela_normal" required></div></div>                     <div class="row mb-3">                            <label for="suela_antirres" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesuela_antirres")</label><div class="col-md-6"><input id="suela_antirres" type="text"  class="form-control" name="suela_antirres" required></div></div>                     <div class="row mb-3">                            <label for="aparatos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameaparatos")</label><div class="col-md-6"><input id="aparatos" type="text"  class="form-control" name="aparatos" required></div></div>                     <div class="row mb-3">                            <label for="observacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameobservacion")</label><div class="col-md-6"><input id="observacion" type="text"  class="form-control" name="observacion" required></div></div>                     <div class="row mb-3">                            <label for="plantilla" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameplantilla")</label><div class="col-md-6"><input id="plantilla" type="text"  class="form-control" name="plantilla" required></div></div>                     <div class="row mb-3">                            <label for="aae" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameaae")</label><div class="col-md-6"><input id="aae" type="text"  class="form-control" name="aae" required></div></div>                     <div class="row mb-3">                            <label for="api" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameapi")</label><div class="col-md-6"><input id="api" type="text"  class="form-control" name="api" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
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
</div>
</div>
@endsection
