@extends('dashboard1')

@section('content-table')

<?php use App\Modelo\Transacciones;$products = Transacciones::all(); ?>

<div class="card">

<h5 class="card-header">TRANSACCIONES</h5>



<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
<a class="btn btn-sm btn-outline-secundary" href="{{ route('transacciones.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /><span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
<th>ID</th><th>FE_REGISTRO</th><th>NAME_USER</th><th>ID_USER</th><th>IDENTIFICATIONNAC</th><th>IDENTIFICATIONNUMBER</th><th>CELLPHONE</th><th>EMAIL</th><th>REFERENCE_T</th><th>CANTIDAD</th><th>TOTALUSD</th><th>TOTALBS</th><th>TASA</th><th>CANTCUOTAS</th><th>AMOUNT</th><th>TITLE</th><th>DESCRIPTION_T</th><th>ID_TRANSACCION</th><th>USERCREATED_AT</th><th>USERUPDATED_AT</th><th>STATUS</th><th>TI_REGISTRO</th><th>TIPO_FACCCIONADO</th>
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
<td>{{$pro->id}}</td><td>{{$pro->fe_registro}}</td><td>{{$pro->name_user}}</td><td>{{$pro->id_user}}</td><td>{{$pro->identificationNac}}</td><td>{{$pro->identificationNumber}}</td><td>{{$pro->cellphone}}</td><td>{{$pro->email}}</td><td>{{$pro->reference_t}}</td><td>{{$pro->cantidad}}</td><td>{{$pro->totalusd}}</td><td>{{$pro->totalbs}}</td><td>{{$pro->tasa}}</td><td>{{$pro->cantcuotas}}</td><td>{{$pro->amount}}</td><td>{{$pro->title}}</td><td>{{$pro->description_t}}</td><td>{{$pro->id_transaccion}}</td><td>{{$pro->usercreated_at}}</td><td>{{$pro->userupdated_at}}</td><td>{{$pro->status}}</td><td>{{$pro->ti_registro}}</td><td>{{$pro->tipo_facccionado}}</td>
              <td>
                <div class="btn-group me-2">
 <a class="btn btn-sm btn-outline-secundary" href="{{ route('transacciones.show',$pro->id) }}">         <img src="/bootstrap-icons/icons/eye.svg" />        <span class="d-none d-xl-inline-block">Ver</span>    </a>
<a class="btn  btn-sm btn-outline-secundary" href="{{ route('transacciones.edit',$pro->id) }}"><img src="/bootstrap-icons/icons/newspaper.svg" ><span class="d-none d-xl-inline-block">Editar</span></a>
<div class='btn btn-sm btn-outline-secundary'><form action='{{ route("transacciones.destroy",$pro->id) }}' method='POST'>@csrf @method('DELETE')<img src='/bootstrap-icons/icons/trash.svg' /><button type='submit' class='btn  d-none d-xl-inline-block'>Borrar</button></form></div>
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

