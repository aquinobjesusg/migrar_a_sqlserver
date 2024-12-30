@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarAppointments')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('appointments.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="client_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameclient_id")</label><div class="col-md-6"><input id="client_id" type="text"  value="{{$registro->client_id}}" class="form-control" name="client_id" required></div></div>                     <div class="row mb-3">                            <label for="date" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedate")</label><div class="col-md-6"><input id="date" type="text"  value="{{$registro->date}}" class="form-control" name="date" required></div></div>                     <div class="row mb-3">                            <label for="time" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametime")</label><div class="col-md-6"><input id="time" type="text"  value="{{$registro->time}}" class="form-control" name="time" required></div></div>                     <div class="row mb-3">                            <label for="status" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestatus")</label><div class="col-md-6"><input id="status" type="text"  value="{{$registro->status}}" class="form-control" name="status" required></div></div>                     <div class="row mb-3">                            <label for="note" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenote")</label><div class="col-md-6"><input id="note" type="text"  value="{{$registro->note}}" class="form-control" name="note" required></div></div>                     <div class="row mb-3">                            <label for="members" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemembers")</label><div class="col-md-6"><input id="members" type="text"  value="{{$registro->members}}" class="form-control" name="members" required></div></div>                     <div class="row mb-3">                            <label for="color" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecolor")</label><div class="col-md-6"><input id="color" type="text"  value="{{$registro->color}}" class="form-control" name="color" required></div></div>                     <div class="row mb-3">                            <label for="order_position" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorder_position")</label><div class="col-md-6"><input id="order_position" type="text"  value="{{$registro->order_position}}" class="form-control" name="order_position" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('appointments.index') }}" class="btn btn-defaultchar" >
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
