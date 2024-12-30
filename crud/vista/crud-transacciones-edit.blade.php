@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarTransacciones')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('transacciones.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="fe_registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefe_registro")</label><div class="col-md-6"><input id="fe_registro" type="text"  value="{{$registro->fe_registro}}" class="form-control" name="fe_registro" required></div></div>                     <div class="row mb-3">                            <label for="name_user" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename_user")</label><div class="col-md-6"><input id="name_user" type="text"  value="{{$registro->name_user}}" class="form-control" name="name_user" required></div></div>                     <div class="row mb-3">                            <label for="id_user" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_user")</label><div class="col-md-6"><input id="id_user" type="text"  value="{{$registro->id_user}}" class="form-control" name="id_user" required></div></div>                     <div class="row mb-3">                            <label for="identificationnac" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameidentificationnac")</label><div class="col-md-6"><input id="identificationnac" type="text"  value="{{$registro->identificationnac}}" class="form-control" name="identificationnac" required></div></div>                     <div class="row mb-3">                            <label for="identificationnumber" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameidentificationnumber")</label><div class="col-md-6"><input id="identificationnumber" type="text"  value="{{$registro->identificationnumber}}" class="form-control" name="identificationnumber" required></div></div>                     <div class="row mb-3">                            <label for="cellphone" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecellphone")</label><div class="col-md-6"><input id="cellphone" type="text"  value="{{$registro->cellphone}}" class="form-control" name="cellphone" required></div></div>                     <div class="row mb-3">                            <label for="email" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemail")</label><div class="col-md-6"><input id="email" type="text"  value="{{$registro->email}}" class="form-control" name="email" required></div></div>                     <div class="row mb-3">                            <label for="reference_t" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereference_t")</label><div class="col-md-6"><input id="reference_t" type="text"  value="{{$registro->reference_t}}" class="form-control" name="reference_t" required></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text"  value="{{$registro->cantidad}}" class="form-control" name="cantidad" required></div></div>                     <div class="row mb-3">                            <label for="totalusd" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotalusd")</label><div class="col-md-6"><input id="totalusd" type="text"  value="{{$registro->totalusd}}" class="form-control" name="totalusd" required></div></div>                     <div class="row mb-3">                            <label for="totalbs" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotalbs")</label><div class="col-md-6"><input id="totalbs" type="text"  value="{{$registro->totalbs}}" class="form-control" name="totalbs" required></div></div>                     <div class="row mb-3">                            <label for="tasa" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametasa")</label><div class="col-md-6"><input id="tasa" type="text"  value="{{$registro->tasa}}" class="form-control" name="tasa" required></div></div>                     <div class="row mb-3">                            <label for="cantcuotas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantcuotas")</label><div class="col-md-6"><input id="cantcuotas" type="text"  value="{{$registro->cantcuotas}}" class="form-control" name="cantcuotas" required></div></div>                     <div class="row mb-3">                            <label for="amount" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameamount")</label><div class="col-md-6"><input id="amount" type="text"  value="{{$registro->amount}}" class="form-control" name="amount" required></div></div>                     <div class="row mb-3">                            <label for="title" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametitle")</label><div class="col-md-6"><input id="title" type="text"  value="{{$registro->title}}" class="form-control" name="title" required></div></div>                     <div class="row mb-3">                            <label for="description_t" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescription_t")</label><div class="col-md-6"><input id="description_t" type="text"  value="{{$registro->description_t}}" class="form-control" name="description_t" required></div></div>                     <div class="row mb-3">                            <label for="id_transaccion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_transaccion")</label><div class="col-md-6"><input id="id_transaccion" type="text"  value="{{$registro->id_transaccion}}" class="form-control" name="id_transaccion" required></div></div>                     <div class="row mb-3">                            <label for="status" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestatus")</label><div class="col-md-6"><input id="status" type="text"  value="{{$registro->status}}" class="form-control" name="status" required></div></div>                     <div class="row mb-3">                            <label for="ti_registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameti_registro")</label><div class="col-md-6"><input id="ti_registro" type="text"  value="{{$registro->ti_registro}}" class="form-control" name="ti_registro" required></div></div>                     <div class="row mb-3">                            <label for="tipo_facccionado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_facccionado")</label><div class="col-md-6"><input id="tipo_facccionado" type="text"  value="{{$registro->tipo_facccionado}}" class="form-control" name="tipo_facccionado" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('transacciones.index') }}" class="btn btn-defaultchar" >
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
