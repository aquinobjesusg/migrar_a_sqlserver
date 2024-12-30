@extends('dashboard1')

@section('content-table')

<?php
use App\Models\Categorias;
$products = Categorias::all();
?>

<div class="card">
				<h5 class="card-header">
					Categorias
				</h5>
				<div class="card-body">

<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a class="btn btn-sm btn-outline-secundary"  href="{{ route('categorias.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /> <span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
              <td>{{ $pro->id }}</td>
              <td>{{ $pro->name }}</td>
              <td>
                <div class="btn-group me-2">
                            <a class="btn btn-sm btn-outline-secundary" href="{{ route('categorias.show',$pro->id) }}">
                                <img src="/bootstrap-icons/icons/eye.svg" />
                                <span class="d-none d-xl-inline-block">Ver</span>
                            </a>
                            <a class="btn  btn-sm btn-outline-secundary" href="{{ route('categorias.edit',$pro->id) }}">
                                <img src="/bootstrap-icons/icons/newspaper.svg" >
                                <span class="d-none d-xl-inline-block">Editar</span>
                            </a>
                            <div class="btn   btn-sm btn-outline-secundary">
                                <form action="{{ route('categorias.destroy',$pro->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <img src="/bootstrap-icons/icons/trash.svg" />
                                    <button type="submit" class="btn  d-none d-xl-inline-block">Borrar</button>
                                </form>
                            </div>
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