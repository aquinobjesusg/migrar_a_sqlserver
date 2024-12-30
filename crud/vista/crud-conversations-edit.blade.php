@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarConversations')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('conversations.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="sender_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesender_id")</label><div class="col-md-6"><input id="sender_id" type="text"  value="{{$registro->sender_id}}" class="form-control" name="sender_id" required></div></div>                     <div class="row mb-3">                            <label for="receiver_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereceiver_id")</label><div class="col-md-6"><input id="receiver_id" type="text"  value="{{$registro->receiver_id}}" class="form-control" name="receiver_id" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('conversations.index') }}" class="btn btn-defaultchar" >
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
