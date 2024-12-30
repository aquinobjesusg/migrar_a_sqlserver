@extends('dashboard1')

@section('content-table')

<?php use App\Modelo\Deliverys;$products = Deliverys::all(); ?>

<div class="card">

<h5 class="card-header">DELIVERYS</h5>



<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
<a class="btn btn-sm btn-outline-secundary" href="{{ route('deliverys.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /><span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
<th>ID</th><th>NAME_DELIVERY</th><th>CEDULA_DELIVERY</th><th>TELEFONO_DELIVERY</th><th>CELULAR_DELIVERY</th><th>EMAIL_DELIVERY</th><th>NRO_PLACA</th><th>COLOR_VEHICULO</th><th>TIPO_VEHICULO</th><th>USER_ID</th><th>CA_VALORACION</th>
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
<td>{{$pro->id}}</td><td>{{$pro->name_delivery}}</td><td>{{$pro->cedula_delivery}}</td><td>{{$pro->telefono_delivery}}</td><td>{{$pro->celular_delivery}}</td><td>{{$pro->email_delivery}}</td><td>{{$pro->nro_placa}}</td><td>{{$pro->color_vehiculo}}</td><td>{{$pro->tipo_vehiculo}}</td><td>{{$pro->user_id}}</td><td>{{$pro->ca_valoracion}}</td>
              <td>
                <div class="btn-group me-2">
 <a class="btn btn-sm btn-outline-secundary" href="{{ route('deliverys.show',$pro->id) }}">         <img src="/bootstrap-icons/icons/eye.svg" />        <span class="d-none d-xl-inline-block">Ver</span>    </a>
<a class="btn  btn-sm btn-outline-secundary" href="{{ route('deliverys.edit',$pro->id) }}"><img src="/bootstrap-icons/icons/newspaper.svg" ><span class="d-none d-xl-inline-block">Editar</span></a>
<div class='btn btn-sm btn-outline-secundary'><form action='{{ route("deliverys.destroy",$pro->id) }}' method='POST'>@csrf @method('DELETE')<img src='/bootstrap-icons/icons/trash.svg' /><button type='submit' class='btn  d-none d-xl-inline-block'>Borrar</button></form></div>
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

