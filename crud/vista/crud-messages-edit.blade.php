@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarMessages')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('messages.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="conversation_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconversation_id")</label><div class="col-md-6"><input id="conversation_id" type="text"  value="{{$registro->conversation_id}}" class="form-control" name="conversation_id" required></div></div>                     <div class="row mb-3">                            <label for="user_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuser_id")</label><div class="col-md-6"><input id="user_id" type="text"  value="{{$registro->user_id}}" class="form-control" name="user_id" required></div></div>                     <div class="row mb-3">                            <label for="body" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebody")</label><div class="col-md-6"><input id="body" type="text"  value="{{$registro->body}}" class="form-control" name="body" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('messages.index') }}" class="btn btn-defaultchar" >
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
