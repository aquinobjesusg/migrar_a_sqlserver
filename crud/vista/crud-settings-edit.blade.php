@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarSettings')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('settings.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="site_name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesite_name")</label><div class="col-md-6"><input id="site_name" type="text"  value="{{$registro->site_name}}" class="form-control" name="site_name" required></div></div>                     <div class="row mb-3">                            <label for="site_email" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesite_email")</label><div class="col-md-6"><input id="site_email" type="text"  value="{{$registro->site_email}}" class="form-control" name="site_email" required></div></div>                     <div class="row mb-3">                            <label for="site_title" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesite_title")</label><div class="col-md-6"><input id="site_title" type="text"  value="{{$registro->site_title}}" class="form-control" name="site_title" required></div></div>                     <div class="row mb-3">                            <label for="footer_text" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefooter_text")</label><div class="col-md-6"><input id="footer_text" type="text"  value="{{$registro->footer_text}}" class="form-control" name="footer_text" required></div></div>                     <div class="row mb-3">                            <label for="sidebar_collapse" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesidebar_collapse")</label><div class="col-md-6"><input id="sidebar_collapse" type="text"  value="{{$registro->sidebar_collapse}}" class="form-control" name="sidebar_collapse" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('settings.index') }}" class="btn btn-defaultchar" >
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
