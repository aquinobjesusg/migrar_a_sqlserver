@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerExamen_fisico')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text" value="{{$registro->nrohistoria}}" class="form-control" name="nrohistoria" readonly></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text" value="{{$registro->nroconsulta}}" class="form-control" name="nroconsulta" readonly></div></div>                     <div class="row mb-3">                            <label for="cardiopulmonal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecardiopulmonal")</label><div class="col-md-6"><input id="cardiopulmonal" type="text" value="{{$registro->cardiopulmonal}}" class="form-control" name="cardiopulmonal" readonly></div></div>                     <div class="row mb-3">                            <label for="abdomen" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameabdomen")</label><div class="col-md-6"><input id="abdomen" type="text" value="{{$registro->abdomen}}" class="form-control" name="abdomen" readonly></div></div>                     <div class="row mb-3">                            <label for="extremidades" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameextremidades")</label><div class="col-md-6"><input id="extremidades" type="text" value="{{$registro->extremidades}}" class="form-control" name="extremidades" readonly></div></div>                     <div class="row mb-3">                            <label for="otros" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameotros")</label><div class="col-md-6"><input id="otros" type="text" value="{{$registro->otros}}" class="form-control" name="otros" readonly></div></div>                     <div class="row mb-3">                            <label for="electrocardiograma" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameelectrocardiograma")</label><div class="col-md-6"><input id="electrocardiograma" type="text" value="{{$registro->electrocardiograma}}" class="form-control" name="electrocardiograma" readonly></div></div>                     <div class="row mb-3">                            <label for="rx_de_torax" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerx_de_torax")</label><div class="col-md-6"><input id="rx_de_torax" type="text" value="{{$registro->rx_de_torax}}" class="form-control" name="rx_de_torax" readonly></div></div>                     <div class="row mb-3">                            <label for="laboratorio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelaboratorio")</label><div class="col-md-6"><input id="laboratorio" type="text" value="{{$registro->laboratorio}}" class="form-control" name="laboratorio" readonly></div></div>                     <div class="row mb-3">                            <label for="riesgo_operatorio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameriesgo_operatorio")</label><div class="col-md-6"><input id="riesgo_operatorio" type="text" value="{{$registro->riesgo_operatorio}}" class="form-control" name="riesgo_operatorio" readonly></div></div>                     <div class="row mb-3">                            <label for="sugerencias" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesugerencias")</label><div class="col-md-6"><input id="sugerencias" type="text" value="{{$registro->sugerencias}}" class="form-control" name="sugerencias" readonly></div></div>
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
