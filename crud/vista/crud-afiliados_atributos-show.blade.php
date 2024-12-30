@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="card">
<h5 class="card-header">
@lang('dicc.VerAfiliados_atributos')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="/tablas/roles">
@csrf
                     <div class="row mb-3">                            <label for="afiliado_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameafiliado_id")</label><div class="col-md-6"><input id="afiliado_id" type="text" value="{{$registro->afiliado_id}}" class="form-control" name="afiliado_id" readonly></div></div>                     <div class="row mb-3">                            <label for="logo_principal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelogo_principal")</label><div class="col-md-6"><input id="logo_principal" type="text" value="{{$registro->logo_principal}}" class="form-control" name="logo_principal" readonly></div></div>                     <div class="row mb-3">                            <label for="imagen_1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimagen_1")</label><div class="col-md-6"><input id="imagen_1" type="text" value="{{$registro->imagen_1}}" class="form-control" name="imagen_1" readonly></div></div>                     <div class="row mb-3">                            <label for="imagen_2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimagen_2")</label><div class="col-md-6"><input id="imagen_2" type="text" value="{{$registro->imagen_2}}" class="form-control" name="imagen_2" readonly></div></div>                     <div class="row mb-3">                            <label for="imagen_3" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimagen_3")</label><div class="col-md-6"><input id="imagen_3" type="text" value="{{$registro->imagen_3}}" class="form-control" name="imagen_3" readonly></div></div>                     <div class="row mb-3">                            <label for="imagen_4" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimagen_4")</label><div class="col-md-6"><input id="imagen_4" type="text" value="{{$registro->imagen_4}}" class="form-control" name="imagen_4" readonly></div></div>                     <div class="row mb-3">                            <label for="imagen_5" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimagen_5")</label><div class="col-md-6"><input id="imagen_5" type="text" value="{{$registro->imagen_5}}" class="form-control" name="imagen_5" readonly></div></div>                     <div class="row mb-3">                            <label for="color_1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecolor_1")</label><div class="col-md-6"><input id="color_1" type="text" value="{{$registro->color_1}}" class="form-control" name="color_1" readonly></div></div>                     <div class="row mb-3">                            <label for="color_2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecolor_2")</label><div class="col-md-6"><input id="color_2" type="text" value="{{$registro->color_2}}" class="form-control" name="color_2" readonly></div></div>                     <div class="row mb-3">                            <label for="color_3" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecolor_3")</label><div class="col-md-6"><input id="color_3" type="text" value="{{$registro->color_3}}" class="form-control" name="color_3" readonly></div></div>                     <div class="row mb-3">                            <label for="color_4" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecolor_4")</label><div class="col-md-6"><input id="color_4" type="text" value="{{$registro->color_4}}" class="form-control" name="color_4" readonly></div></div>                     <div class="row mb-3">                            <label for="color_5" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecolor_5")</label><div class="col-md-6"><input id="color_5" type="text" value="{{$registro->color_5}}" class="form-control" name="color_5" readonly></div></div>                     <div class="row mb-3">                            <label for="baner_1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebaner_1")</label><div class="col-md-6"><input id="baner_1" type="text" value="{{$registro->baner_1}}" class="form-control" name="baner_1" readonly></div></div>                     <div class="row mb-3">                            <label for="baner_2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebaner_2")</label><div class="col-md-6"><input id="baner_2" type="text" value="{{$registro->baner_2}}" class="form-control" name="baner_2" readonly></div></div>                     <div class="row mb-3">                            <label for="baner_3" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebaner_3")</label><div class="col-md-6"><input id="baner_3" type="text" value="{{$registro->baner_3}}" class="form-control" name="baner_3" readonly></div></div>                     <div class="row mb-3">                            <label for="baner_4" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebaner_4")</label><div class="col-md-6"><input id="baner_4" type="text" value="{{$registro->baner_4}}" class="form-control" name="baner_4" readonly></div></div>                     <div class="row mb-3">                            <label for="baner_5" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebaner_5")</label><div class="col-md-6"><input id="baner_5" type="text" value="{{$registro->baner_5}}" class="form-control" name="baner_5" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('afiliados_atributos.index') }}" class="btn btn-default" >
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
