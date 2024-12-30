@extends('dashboard1')

@section('content-table')

<?php use App\Modelo\Afiliados_atributos;$products = Afiliados_atributos::all(); ?>

<div class="card">

<h5 class="card-header">AFILIADOS_ATRIBUTOS</h5>



<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
<a class="btn btn-sm btn-outline-secundary" href="{{ route('afiliados_atributos.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /><span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
<th>ID</th><th>AFILIADO_ID</th><th>LOGO_PRINCIPAL</th><th>IMAGEN_1</th><th>IMAGEN_2</th><th>IMAGEN_3</th><th>IMAGEN_4</th><th>IMAGEN_5</th><th>COLOR_1</th><th>COLOR_2</th><th>COLOR_3</th><th>COLOR_4</th><th>COLOR_5</th><th>BANER_1</th><th>BANER_2</th><th>BANER_3</th><th>BANER_4</th><th>BANER_5</th>
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
<td>{{$pro->id}}</td><td>{{$pro->afiliado_id}}</td><td>{{$pro->logo_principal}}</td><td>{{$pro->imagen_1}}</td><td>{{$pro->imagen_2}}</td><td>{{$pro->imagen_3}}</td><td>{{$pro->imagen_4}}</td><td>{{$pro->imagen_5}}</td><td>{{$pro->color_1}}</td><td>{{$pro->color_2}}</td><td>{{$pro->color_3}}</td><td>{{$pro->color_4}}</td><td>{{$pro->color_5}}</td><td>{{$pro->baner_1}}</td><td>{{$pro->baner_2}}</td><td>{{$pro->baner_3}}</td><td>{{$pro->baner_4}}</td><td>{{$pro->baner_5}}</td>
              <td>
                <div class="btn-group me-2">
 <a class="btn btn-sm btn-outline-secundary" href="{{ route('afiliados_atributos.show',$pro->id) }}">         <img src="/bootstrap-icons/icons/eye.svg" />        <span class="d-none d-xl-inline-block">Ver</span>    </a>
<a class="btn  btn-sm btn-outline-secundary" href="{{ route('afiliados_atributos.edit',$pro->id) }}"><img src="/bootstrap-icons/icons/newspaper.svg" ><span class="d-none d-xl-inline-block">Editar</span></a>
<div class='btn btn-sm btn-outline-secundary'><form action='{{ route("afiliados_atributos.destroy",$pro->id) }}' method='POST'>@csrf @method('DELETE')<img src='/bootstrap-icons/icons/trash.svg' /><button type='submit' class='btn  d-none d-xl-inline-block'>Borrar</button></form></div>
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

