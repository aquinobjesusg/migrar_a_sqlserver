@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarDeliverys')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('deliverys.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="name_delivery" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename_delivery")</label><div class="col-md-6"><input id="name_delivery" type="text"  value="{{$registro->name_delivery}}" class="form-control" name="name_delivery" required></div></div>                     <div class="row mb-3">                            <label for="cedula_delivery" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula_delivery")</label><div class="col-md-6"><input id="cedula_delivery" type="text"  value="{{$registro->cedula_delivery}}" class="form-control" name="cedula_delivery" required></div></div>                     <div class="row mb-3">                            <label for="telefono_delivery" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono_delivery")</label><div class="col-md-6"><input id="telefono_delivery" type="text"  value="{{$registro->telefono_delivery}}" class="form-control" name="telefono_delivery" required></div></div>                     <div class="row mb-3">                            <label for="celular_delivery" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecelular_delivery")</label><div class="col-md-6"><input id="celular_delivery" type="text"  value="{{$registro->celular_delivery}}" class="form-control" name="celular_delivery" required></div></div>                     <div class="row mb-3">                            <label for="email_delivery" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemail_delivery")</label><div class="col-md-6"><input id="email_delivery" type="text"  value="{{$registro->email_delivery}}" class="form-control" name="email_delivery" required></div></div>                     <div class="row mb-3">                            <label for="nro_placa" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_placa")</label><div class="col-md-6"><input id="nro_placa" type="text"  value="{{$registro->nro_placa}}" class="form-control" name="nro_placa" required></div></div>                     <div class="row mb-3">                            <label for="color_vehiculo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecolor_vehiculo")</label><div class="col-md-6"><input id="color_vehiculo" type="text"  value="{{$registro->color_vehiculo}}" class="form-control" name="color_vehiculo" required></div></div>                     <div class="row mb-3">                            <label for="tipo_vehiculo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_vehiculo")</label><div class="col-md-6"><input id="tipo_vehiculo" type="text"  value="{{$registro->tipo_vehiculo}}" class="form-control" name="tipo_vehiculo" required></div></div>                     <div class="row mb-3">                            <label for="user_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuser_id")</label><div class="col-md-6"><input id="user_id" type="text"  value="{{$registro->user_id}}" class="form-control" name="user_id" required></div></div>                     <div class="row mb-3">                            <label for="ca_valoracion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameca_valoracion")</label><div class="col-md-6"><input id="ca_valoracion" type="text"  value="{{$registro->ca_valoracion}}" class="form-control" name="ca_valoracion" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('deliverys.index') }}" class="btn btn-defaultchar" >
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
