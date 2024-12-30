@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarSucursales')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('sucursales.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="code_sucursal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecode_sucursal")</label><div class="col-md-6"><input id="code_sucursal" type="text"  value="{{$registro->code_sucursal}}" class="form-control" name="code_sucursal" required></div></div>                     <div class="row mb-3">                            <label for="name_sucursal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename_sucursal")</label><div class="col-md-6"><input id="name_sucursal" type="text"  value="{{$registro->name_sucursal}}" class="form-control" name="name_sucursal" required></div></div>                     <div class="row mb-3">                            <label for="dineccion_sucursal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedineccion_sucursal")</label><div class="col-md-6"><input id="dineccion_sucursal" type="text"  value="{{$registro->dineccion_sucursal}}" class="form-control" name="dineccion_sucursal" required></div></div>                     <div class="row mb-3">                            <label for="telefono_sucursal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono_sucursal")</label><div class="col-md-6"><input id="telefono_sucursal" type="text"  value="{{$registro->telefono_sucursal}}" class="form-control" name="telefono_sucursal" required></div></div>                     <div class="row mb-3">                            <label for="celular_sucursal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecelular_sucursal")</label><div class="col-md-6"><input id="celular_sucursal" type="text"  value="{{$registro->celular_sucursal}}" class="form-control" name="celular_sucursal" required></div></div>                     <div class="row mb-3">                            <label for="email_afiliado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemail_afiliado")</label><div class="col-md-6"><input id="email_afiliado" type="text"  value="{{$registro->email_afiliado}}" class="form-control" name="email_afiliado" required></div></div>                     <div class="row mb-3">                            <label for="afiliado_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameafiliado_id")</label><div class="col-md-6"><input id="afiliado_id" type="text"  value="{{$registro->afiliado_id}}" class="form-control" name="afiliado_id" required></div></div>                     <div class="row mb-3">                            <label for="rif_sucursal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerif_sucursal")</label><div class="col-md-6"><input id="rif_sucursal" type="text"  value="{{$registro->rif_sucursal}}" class="form-control" name="rif_sucursal" required></div></div>                     <div class="row mb-3">                            <label for="domicilio_fiscal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedomicilio_fiscal")</label><div class="col-md-6"><input id="domicilio_fiscal" type="text"  value="{{$registro->domicilio_fiscal}}" class="form-control" name="domicilio_fiscal" required></div></div>                     <div class="row mb-3">                            <label for="telefono_fiscal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono_fiscal")</label><div class="col-md-6"><input id="telefono_fiscal" type="text"  value="{{$registro->telefono_fiscal}}" class="form-control" name="telefono_fiscal" required></div></div>                     <div class="row mb-3">                            <label for="codigo_postal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodigo_postal")</label><div class="col-md-6"><input id="codigo_postal" type="text"  value="{{$registro->codigo_postal}}" class="form-control" name="codigo_postal" required></div></div>                     <div class="row mb-3">                            <label for="zona" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namezona")</label><div class="col-md-6"><input id="zona" type="text"  value="{{$registro->zona}}" class="form-control" name="zona" required></div></div>                     <div class="row mb-3">                            <label for="ciudad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameciudad")</label><div class="col-md-6"><input id="ciudad" type="text"  value="{{$registro->ciudad}}" class="form-control" name="ciudad" required></div></div>                     <div class="row mb-3">                            <label for="estado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestado")</label><div class="col-md-6"><input id="estado" type="text"  value="{{$registro->estado}}" class="form-control" name="estado" required></div></div>                     <div class="row mb-3">                            <label for="pais" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepais")</label><div class="col-md-6"><input id="pais" type="text"  value="{{$registro->pais}}" class="form-control" name="pais" required></div></div>                     <div class="row mb-3">                            <label for="in_valido" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namein_valido")</label><div class="col-md-6"><input id="in_valido" type="text"  value="{{$registro->in_valido}}" class="form-control" name="in_valido" required></div></div>                     <div class="row mb-3">                            <label for="ca_valoracion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameca_valoracion")</label><div class="col-md-6"><input id="ca_valoracion" type="text"  value="{{$registro->ca_valoracion}}" class="form-control" name="ca_valoracion" required></div></div>                     <div class="row mb-3">                            <label for="in_abierto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namein_abierto")</label><div class="col-md-6"><input id="in_abierto" type="text"  value="{{$registro->in_abierto}}" class="form-control" name="in_abierto" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('sucursales.index') }}" class="btn btn-defaultchar" >
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
