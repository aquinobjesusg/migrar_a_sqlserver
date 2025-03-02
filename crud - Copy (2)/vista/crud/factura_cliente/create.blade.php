@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearFactura_cliente')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="numfactura" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumfactura")</label><div class="col-md-6"><input id="numfactura" type="text"  class="form-control" name="numfactura" required></div></div>                     <div class="row mb-3">                            <label for="cedu_rif" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedu_rif")</label><div class="col-md-6"><input id="cedu_rif" type="text"  class="form-control" name="cedu_rif" required></div></div>                     <div class="row mb-3">                            <label for="fecha_factura" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_factura")</label><div class="col-md-6"><input id="fecha_factura" type="text"  class="form-control" name="fecha_factura" required></div></div>                     <div class="row mb-3">                            <label for="fecha_vence_fact" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_vence_fact")</label><div class="col-md-6"><input id="fecha_vence_fact" type="text"  class="form-control" name="fecha_vence_fact" required></div></div>                     <div class="row mb-3">                            <label for="fecha_cance_fact" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_cance_fact")</label><div class="col-md-6"><input id="fecha_cance_fact" type="text"  class="form-control" name="fecha_cance_fact" required></div></div>                     <div class="row mb-3">                            <label for="cliente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecliente")</label><div class="col-md-6"><input id="cliente" type="text"  class="form-control" name="cliente" required></div></div>                     <div class="row mb-3">                            <label for="status_factura" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestatus_factura")</label><div class="col-md-6"><input id="status_factura" type="text"  class="form-control" name="status_factura" required></div></div>                     <div class="row mb-3">                            <label for="tipo_factura" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_factura")</label><div class="col-md-6"><input id="tipo_factura" type="text"  class="form-control" name="tipo_factura" required></div></div>                     <div class="row mb-3">                            <label for="paciente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepaciente")</label><div class="col-md-6"><input id="paciente" type="text"  class="form-control" name="paciente" required></div></div>                     <div class="row mb-3">                            <label for="nom_paciente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenom_paciente")</label><div class="col-md-6"><input id="nom_paciente" type="text"  class="form-control" name="nom_paciente" required></div></div>                     <div class="row mb-3">                            <label for="tipo_precio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_precio")</label><div class="col-md-6"><input id="tipo_precio" type="text"  class="form-control" name="tipo_precio" required></div></div>                     <div class="row mb-3">                            <label for="nro_orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_orden")</label><div class="col-md-6"><input id="nro_orden" type="text"  class="form-control" name="nro_orden" required></div></div>                     <div class="row mb-3">                            <label for="total_costo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_costo")</label><div class="col-md-6"><input id="total_costo" type="text"  class="form-control" name="total_costo" required></div></div>                     <div class="row mb-3">                            <label for="total_neto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_neto")</label><div class="col-md-6"><input id="total_neto" type="text"  class="form-control" name="total_neto" required></div></div>                     <div class="row mb-3">                            <label for="total_bruto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_bruto")</label><div class="col-md-6"><input id="total_bruto" type="text"  class="form-control" name="total_bruto" required></div></div>                     <div class="row mb-3">                            <label for="total_final" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_final")</label><div class="col-md-6"><input id="total_final" type="text"  class="form-control" name="total_final" required></div></div>                     <div class="row mb-3">                            <label for="total_descuento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_descuento")</label><div class="col-md-6"><input id="total_descuento" type="text"  class="form-control" name="total_descuento" required></div></div>                     <div class="row mb-3">                            <label for="descuento_linea" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescuento_linea")</label><div class="col-md-6"><input id="descuento_linea" type="text"  class="form-control" name="descuento_linea" required></div></div>                     <div class="row mb-3">                            <label for="notas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenotas")</label><div class="col-md-6"><input id="notas" type="text"  class="form-control" name="notas" required></div></div>                     <div class="row mb-3">                            <label for="hora_documento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora_documento")</label><div class="col-md-6"><input id="hora_documento" type="text"  class="form-control" name="hora_documento" required></div></div>                     <div class="row mb-3">                            <label for="monto_pac" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_pac")</label><div class="col-md-6"><input id="monto_pac" type="text"  class="form-control" name="monto_pac" required></div></div>                     <div class="row mb-3">                            <label for="monto_emp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_emp")</label><div class="col-md-6"><input id="monto_emp" type="text"  class="form-control" name="monto_emp" required></div></div>                     <div class="row mb-3">                            <label for="numero_consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumero_consulta")</label><div class="col-md-6"><input id="numero_consulta" type="text"  class="form-control" name="numero_consulta" required></div></div>                     <div class="row mb-3">                            <label for="numero_historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumero_historia")</label><div class="col-md-6"><input id="numero_historia" type="text"  class="form-control" name="numero_historia" required></div></div>                     <div class="row mb-3">                            <label for="tipo_doc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_doc")</label><div class="col-md-6"><input id="tipo_doc" type="text"  class="form-control" name="tipo_doc" required></div></div>                     <div class="row mb-3">                            <label for="medico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico")</label><div class="col-md-6"><input id="medico" type="text"  class="form-control" name="medico" required></div></div>                     <div class="row mb-3">                            <label for="nro_cxp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_cxp")</label><div class="col-md-6"><input id="nro_cxp" type="text"  class="form-control" name="nro_cxp" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
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
</div>
</div>
@endsection
