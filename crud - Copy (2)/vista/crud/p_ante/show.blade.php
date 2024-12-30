@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerP_ante')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="codante" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodante")</label><div class="col-md-6"><input id="codante" type="text" value="{{$registro->codante}}" class="form-control" name="codante" readonly></div></div>                     <div class="row mb-3">                            <label for="codtipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodtipo")</label><div class="col-md-6"><input id="codtipo" type="text" value="{{$registro->codtipo}}" class="form-control" name="codtipo" readonly></div></div>                     <div class="row mb-3">                            <label for="descrip" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescrip")</label><div class="col-md-6"><input id="descrip" type="text" value="{{$registro->descrip}}" class="form-control" name="descrip" readonly></div></div>
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
