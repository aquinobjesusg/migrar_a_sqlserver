@extends('dashboard1')
@section('content-table')
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearUsers')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('users.store') }}">
@csrf
                     <div class="row mb-3">                            <label for="name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename")</label><div class="col-md-6"><input id="name" type="text"  class="form-control" name="name" required></div></div>                     <div class="row mb-3">                            <label for="email" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemail")</label><div class="col-md-6"><input id="email" type="text"  class="form-control" name="email" required></div></div>                     <div class="row mb-3">                            <label for="email_verified_at" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemail_verified_at")</label><div class="col-md-6"><input id="email_verified_at" type="text"  class="form-control" name="email_verified_at" required></div></div>                     <div class="row mb-3">                            <label for="password" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepassword")</label><div class="col-md-6"><input id="password" type="text"  class="form-control" name="password" required></div></div>                     <div class="row mb-3">                            <label for="two_factor_secret" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametwo_factor_secret")</label><div class="col-md-6"><input id="two_factor_secret" type="text"  class="form-control" name="two_factor_secret" required></div></div>                     <div class="row mb-3">                            <label for="two_factor_recovery_codes" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametwo_factor_recovery_codes")</label><div class="col-md-6"><input id="two_factor_recovery_codes" type="text"  class="form-control" name="two_factor_recovery_codes" required></div></div>                     <div class="row mb-3">                            <label for="remember_token" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameremember_token")</label><div class="col-md-6"><input id="remember_token" type="text"  class="form-control" name="remember_token" required></div></div>                     <div class="row mb-3">                            <label for="avatar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameavatar")</label><div class="col-md-6"><input id="avatar" type="text"  class="form-control" name="avatar" required></div></div>                     <div class="row mb-3">                            <label for="role" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerole")</label><div class="col-md-6"><input id="role" type="text"  class="form-control" name="role" required></div></div>                     <div class="row mb-3">                            <label for="afiliado_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameafiliado_id")</label><div class="col-md-6"><input id="afiliado_id" type="text"  class="form-control" name="afiliado_id" required></div></div>                     <div class="row mb-3">                            <label for="role_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerole_id")</label><div class="col-md-6"><input id="role_id" type="text"  class="form-control" name="role_id" required></div></div>                     <div class="row mb-3">                            <label for="sucursal_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesucursal_id")</label><div class="col-md-6"><input id="sucursal_id" type="text"  class="form-control" name="sucursal_id" required></div></div>                     <div class="row mb-3">                            <label for="empresa_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameempresa_id")</label><div class="col-md-6"><input id="empresa_id" type="text"  class="form-control" name="empresa_id" required></div></div>                     <div class="row mb-3">                            <label for="tipo_usuario" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_usuario")</label><div class="col-md-6"><input id="tipo_usuario" type="text"  class="form-control" name="tipo_usuario" required></div></div>                     <div class="row mb-3">                            <label for="delivery_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedelivery_id")</label><div class="col-md-6"><input id="delivery_id" type="text"  class="form-control" name="delivery_id" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('users.index') }}" class="btn btn-default" >
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
