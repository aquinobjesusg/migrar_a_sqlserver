@extends('dashboard1')

@section('content-table')

<?php use App\Modelo\Sucursales;$products = Sucursales::all(); ?>

<div class="card">

<h5 class="card-header">SUCURSALES</h5>



<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
<a class="btn btn-sm btn-outline-secundary" href="{{ route('sucursales.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /><span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
<th>ID</th><th>CODE_SUCURSAL</th><th>NAME_SUCURSAL</th><th>DINECCION_SUCURSAL</th><th>TELEFONO_SUCURSAL</th><th>CELULAR_SUCURSAL</th><th>EMAIL_AFILIADO</th><th>AFILIADO_ID</th><th>RIF_SUCURSAL</th><th>DOMICILIO_FISCAL</th><th>TELEFONO_FISCAL</th><th>CODIGO_POSTAL</th><th>ZONA</th><th>CIUDAD</th><th>ESTADO</th><th>PAIS</th><th>IN_VALIDO</th><th>CA_VALORACION</th><th>IN_ABIERTO</th>
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
<td>{{$pro->id}}</td><td>{{$pro->code_sucursal}}</td><td>{{$pro->name_sucursal}}</td><td>{{$pro->dineccion_sucursal}}</td><td>{{$pro->telefono_sucursal}}</td><td>{{$pro->celular_sucursal}}</td><td>{{$pro->email_afiliado}}</td><td>{{$pro->afiliado_id}}</td><td>{{$pro->rif_sucursal}}</td><td>{{$pro->domicilio_fiscal}}</td><td>{{$pro->telefono_fiscal}}</td><td>{{$pro->codigo_postal}}</td><td>{{$pro->zona}}</td><td>{{$pro->ciudad}}</td><td>{{$pro->estado}}</td><td>{{$pro->pais}}</td><td>{{$pro->in_valido}}</td><td>{{$pro->ca_valoracion}}</td><td>{{$pro->in_abierto}}</td>
              <td>
                <div class="btn-group me-2">
 <a class="btn btn-sm btn-outline-secundary" href="{{ route('sucursales.show',$pro->id) }}">         <img src="/bootstrap-icons/icons/eye.svg" />        <span class="d-none d-xl-inline-block">Ver</span>    </a>
<a class="btn  btn-sm btn-outline-secundary" href="{{ route('sucursales.edit',$pro->id) }}"><img src="/bootstrap-icons/icons/newspaper.svg" ><span class="d-none d-xl-inline-block">Editar</span></a>
<div class='btn btn-sm btn-outline-secundary'><form action='{{ route("sucursales.destroy",$pro->id) }}' method='POST'>@csrf @method('DELETE')<img src='/bootstrap-icons/icons/trash.svg' /><button type='submit' class='btn  d-none d-xl-inline-block'>Borrar</button></form></div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          </div>
        </div>
@endsection

