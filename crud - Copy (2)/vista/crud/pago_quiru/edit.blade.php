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
                     <div class="row mb-3">                            <label for="cod_pagos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_pagos")</label><div class="col-md-6"><input id="cod_pagos" type="text"  value="{{$registro->cod_pagos}}" class="form-control" name="cod_pagos" required></div></div>                     <div class="row mb-3">                            <label for="consecuti" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsecuti")</label><div class="col-md-6"><input id="consecuti" type="text"  value="{{$registro->consecuti}}" class="form-control" name="consecuti" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  value="{{$registro->fecha}}" class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="monto_total" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_total")</label><div class="col-md-6"><input id="monto_total" type="text"  value="{{$registro->monto_total}}" class="form-control" name="monto_total" required></div></div>                     <div class="row mb-3">                            <label for="abono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameabono")</label><div class="col-md-6"><input id="abono" type="text"  value="{{$registro->abono}}" class="form-control" name="abono" required></div></div>                     <div class="row mb-3">                            <label for="resta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameresta")</label><div class="col-md-6"><input id="resta" type="text"  value="{{$registro->resta}}" class="form-control" name="resta" required></div></div>                     <div class="row mb-3">                            <label for="pago" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepago")</label><div class="col-md-6"><input id="pago" type="text"  value="{{$registro->pago}}" class="form-control" name="pago" required></div></div>                     <div class="row mb-3">                            <label for="hora_pago" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora_pago")</label><div class="col-md-6"><input id="hora_pago" type="text"  value="{{$registro->hora_pago}}" class="form-control" name="hora_pago" required></div></div>
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


