@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarAfiliados')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('afiliados.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="code_afiliado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecode_afiliado")</label><div class="col-md-6"><input id="code_afiliado" type="text"  value="{{$registro->code_afiliado}}" class="form-control" name="code_afiliado" required></div></div>                     <div class="row mb-3">                            <label for="name_afiliado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename_afiliado")</label><div class="col-md-6"><input id="name_afiliado" type="text"  value="{{$registro->name_afiliado}}" class="form-control" name="name_afiliado" required></div></div>                     <div class="row mb-3">                            <label for="dineccion_afiliado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedineccion_afiliado")</label><div class="col-md-6"><input id="dineccion_afiliado" type="text"  value="{{$registro->dineccion_afiliado}}" class="form-control" name="dineccion_afiliado" required></div></div>                     <div class="row mb-3">                            <label for="telefono_afiliado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono_afiliado")</label><div class="col-md-6"><input id="telefono_afiliado" type="text"  value="{{$registro->telefono_afiliado}}" class="form-control" name="telefono_afiliado" required></div></div>                     <div class="row mb-3">                            <label for="celular_afiliado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecelular_afiliado")</label><div class="col-md-6"><input id="celular_afiliado" type="text"  value="{{$registro->celular_afiliado}}" class="form-control" name="celular_afiliado" required></div></div>                     <div class="row mb-3">                            <label for="email_afiliado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemail_afiliado")</label><div class="col-md-6"><input id="email_afiliado" type="text"  value="{{$registro->email_afiliado}}" class="form-control" name="email_afiliado" required></div></div>                     <div class="row mb-3">                            <label for="empresa_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameempresa_id")</label><div class="col-md-6"><input id="empresa_id" type="text"  value="{{$registro->empresa_id}}" class="form-control" name="empresa_id" required></div></div>                     <div class="row mb-3">                            <label for="rif_afiliado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerif_afiliado")</label><div class="col-md-6"><input id="rif_afiliado" type="text"  value="{{$registro->rif_afiliado}}" class="form-control" name="rif_afiliado" required></div></div>                     <div class="row mb-3">                            <label for="domicilio_fiscal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedomicilio_fiscal")</label><div class="col-md-6"><input id="domicilio_fiscal" type="text"  value="{{$registro->domicilio_fiscal}}" class="form-control" name="domicilio_fiscal" required></div></div>                     <div class="row mb-3">                            <label for="telefono_fiscal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono_fiscal")</label><div class="col-md-6"><input id="telefono_fiscal" type="text"  value="{{$registro->telefono_fiscal}}" class="form-control" name="telefono_fiscal" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('afiliados.index') }}" class="btn btn-defaultchar" >
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
