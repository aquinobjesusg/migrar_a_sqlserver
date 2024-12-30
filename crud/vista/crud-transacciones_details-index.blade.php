@extends('dashboard1')

@section('content-table')

<?php use App\Modelo\Transacciones_details;$products = Transacciones_details::all(); ?>

<div class="card">

<h5 class="card-header">TRANSACCIONES_DETAILS</h5>



<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
<a class="btn btn-sm btn-outline-secundary" href="{{ route('transacciones_details.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /><span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
<th>ID</th><th>NAME_PRODUCTO</th><th>SLUG_PRODUCTO</th><th>ID_ITEM</th><th>CANTIDAD</th><th>TOTALUSD</th><th>TOTALBS</th><th>TASA</th><th>USERCREATED_AT</th><th>USERUPDATED_AT</th><th>STATUS</th><th>ID_TRANS</th>
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
<td>{{$pro->id}}</td><td>{{$pro->name_producto}}</td><td>{{$pro->slug_producto}}</td><td>{{$pro->id_item}}</td><td>{{$pro->cantidad}}</td><td>{{$pro->totalusd}}</td><td>{{$pro->totalbs}}</td><td>{{$pro->tasa}}</td><td>{{$pro->usercreated_at}}</td><td>{{$pro->userupdated_at}}</td><td>{{$pro->status}}</td><td>{{$pro->id_trans}}</td>
              <td>
                <div class="btn-group me-2">
 <a class="btn btn-sm btn-outline-secundary" href="{{ route('transacciones_details.show',$pro->id) }}">         <img src="/bootstrap-icons/icons/eye.svg" />        <span class="d-none d-xl-inline-block">Ver</span>    </a>
<a class="btn  btn-sm btn-outline-secundary" href="{{ route('transacciones_details.edit',$pro->id) }}"><img src="/bootstrap-icons/icons/newspaper.svg" ><span class="d-none d-xl-inline-block">Editar</span></a>
<div class='btn btn-sm btn-outline-secundary'><form action='{{ route("transacciones_details.destroy",$pro->id) }}' method='POST'>@csrf @method('DELETE')<img src='/bootstrap-icons/icons/trash.svg' /><button type='submit' class='btn  d-none d-xl-inline-block'>Borrar</button></form></div>
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

