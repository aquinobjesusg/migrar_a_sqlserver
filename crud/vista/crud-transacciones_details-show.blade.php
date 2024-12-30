@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="card">
<h5 class="card-header">
@lang('dicc.VerTransacciones_details')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="/tablas/roles">
@csrf
                     <div class="row mb-3">                            <label for="name_producto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename_producto")</label><div class="col-md-6"><input id="name_producto" type="text" value="{{$registro->name_producto}}" class="form-control" name="name_producto" readonly></div></div>                     <div class="row mb-3">                            <label for="slug_producto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameslug_producto")</label><div class="col-md-6"><input id="slug_producto" type="text" value="{{$registro->slug_producto}}" class="form-control" name="slug_producto" readonly></div></div>                     <div class="row mb-3">                            <label for="id_item" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_item")</label><div class="col-md-6"><input id="id_item" type="text" value="{{$registro->id_item}}" class="form-control" name="id_item" readonly></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text" value="{{$registro->cantidad}}" class="form-control" name="cantidad" readonly></div></div>                     <div class="row mb-3">                            <label for="totalusd" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotalusd")</label><div class="col-md-6"><input id="totalusd" type="text" value="{{$registro->totalusd}}" class="form-control" name="totalusd" readonly></div></div>                     <div class="row mb-3">                            <label for="totalbs" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotalbs")</label><div class="col-md-6"><input id="totalbs" type="text" value="{{$registro->totalbs}}" class="form-control" name="totalbs" readonly></div></div>                     <div class="row mb-3">                            <label for="tasa" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametasa")</label><div class="col-md-6"><input id="tasa" type="text" value="{{$registro->tasa}}" class="form-control" name="tasa" readonly></div></div>                     <div class="row mb-3">                            <label for="status" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestatus")</label><div class="col-md-6"><input id="status" type="text" value="{{$registro->status}}" class="form-control" name="status" readonly></div></div>                     <div class="row mb-3">                            <label for="id_trans" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_trans")</label><div class="col-md-6"><input id="id_trans" type="text" value="{{$registro->id_trans}}" class="form-control" name="id_trans" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('transacciones_details.index') }}" class="btn btn-default" >
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
@endforeach
@endsection
