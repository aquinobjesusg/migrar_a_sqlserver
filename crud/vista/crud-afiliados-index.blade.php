@extends('dashboard1')

@section('content-table')

<?php use App\Modelo\Afiliados;$products = Afiliados::all(); ?>

<div class="card">

<h5 class="card-header">AFILIADOS</h5>



<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
<a class="btn btn-sm btn-outline-secundary" href="{{ route('afiliados.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /><span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
<th>ID</th><th>CODE_AFILIADO</th><th>NAME_AFILIADO</th><th>DINECCION_AFILIADO</th><th>TELEFONO_AFILIADO</th><th>CELULAR_AFILIADO</th><th>EMAIL_AFILIADO</th><th>EMPRESA_ID</th><th>RIF_AFILIADO</th><th>DOMICILIO_FISCAL</th><th>TELEFONO_FISCAL</th>
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
<td>{{$pro->id}}</td><td>{{$pro->code_afiliado}}</td><td>{{$pro->name_afiliado}}</td><td>{{$pro->dineccion_afiliado}}</td><td>{{$pro->telefono_afiliado}}</td><td>{{$pro->celular_afiliado}}</td><td>{{$pro->email_afiliado}}</td><td>{{$pro->empresa_id}}</td><td>{{$pro->rif_afiliado}}</td><td>{{$pro->domicilio_fiscal}}</td><td>{{$pro->telefono_fiscal}}</td>
              <td>
                <div class="btn-group me-2">
 <a class="btn btn-sm btn-outline-secundary" href="{{ route('afiliados.show',$pro->id) }}">         <img src="/bootstrap-icons/icons/eye.svg" />        <span class="d-none d-xl-inline-block">Ver</span>    </a>
<a class="btn  btn-sm btn-outline-secundary" href="{{ route('afiliados.edit',$pro->id) }}"><img src="/bootstrap-icons/icons/newspaper.svg" ><span class="d-none d-xl-inline-block">Editar</span></a>
<div class='btn btn-sm btn-outline-secundary'><form action='{{ route("afiliados.destroy",$pro->id) }}' method='POST'>@csrf @method('DELETE')<img src='/bootstrap-icons/icons/trash.svg' /><button type='submit' class='btn  d-none d-xl-inline-block'>Borrar</button></form></div>
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

