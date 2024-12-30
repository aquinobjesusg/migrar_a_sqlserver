@extends('dashboard1')
@section('content-table')
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearEmpresas')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('empresas.store') }}">
@csrf
                     <div class="row mb-3">                            <label for="code_empresa" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecode_empresa")</label><div class="col-md-6"><input id="code_empresa" type="text"  class="form-control" name="code_empresa" required></div></div>                     <div class="row mb-3">                            <label for="name_empresa" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename_empresa")</label><div class="col-md-6"><input id="name_empresa" type="text"  class="form-control" name="name_empresa" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('empresas.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">@lang('dicc.VerLista')</span>
</a>
</div>
</div>
</form>
</p>
</div>
<div class="card-footer">
</div>
</div>
@endsection
