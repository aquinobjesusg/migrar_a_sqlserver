@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerMotivo_factura_prov')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="id_fac_prov" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_fac_prov")</label><div class="col-md-6"><input id="id_fac_prov" type="text" value="{{$registro->id_fac_prov}}" class="form-control" name="id_fac_prov" readonly></div></div>                     <div class="row mb-3">                            <label for="des_concepto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedes_concepto")</label><div class="col-md-6"><input id="des_concepto" type="text" value="{{$registro->des_concepto}}" class="form-control" name="des_concepto" readonly></div></div>                     <div class="row mb-3">                            <label for="monto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto")</label><div class="col-md-6"><input id="monto" type="text" value="{{$registro->monto}}" class="form-control" name="monto" readonly></div></div>
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
