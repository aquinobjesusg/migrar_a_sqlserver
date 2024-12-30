@extends('dashboard1')

@section('content-table')

<?php use App\Modelo\Users;$products = Users::all(); ?>

<div class="card">

<h5 class="card-header">USERS</h5>



<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
<a class="btn btn-sm btn-outline-secundary" href="{{ route('users.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /><span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
<th>ID</th><th>NAME</th><th>EMAIL</th><th>EMAIL_VERIFIED_AT</th><th>PASSWORD</th><th>TWO_FACTOR_SECRET</th><th>TWO_FACTOR_RECOVERY_CODES</th><th>REMEMBER_TOKEN</th><th>AVATAR</th><th>ROLE</th><th>AFILIADO_ID</th><th>ROLE_ID</th><th>SUCURSAL_ID</th><th>EMPRESA_ID</th><th>TIPO_USUARIO</th><th>DELIVERY_ID</th>
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
<td>{{$pro->id}}</td><td>{{$pro->name}}</td><td>{{$pro->email}}</td><td>{{$pro->email_verified_at}}</td><td>{{$pro->password}}</td><td>{{$pro->two_factor_secret}}</td><td>{{$pro->two_factor_recovery_codes}}</td><td>{{$pro->remember_token}}</td><td>{{$pro->avatar}}</td><td>{{$pro->role}}</td><td>{{$pro->afiliado_id}}</td><td>{{$pro->role_id}}</td><td>{{$pro->sucursal_id}}</td><td>{{$pro->empresa_id}}</td><td>{{$pro->tipo_usuario}}</td><td>{{$pro->delivery_id}}</td>
              <td>
                <div class="btn-group me-2">
 <a class="btn btn-sm btn-outline-secundary" href="{{ route('users.show',$pro->id) }}">         <img src="/bootstrap-icons/icons/eye.svg" />        <span class="d-none d-xl-inline-block">Ver</span>    </a>
<a class="btn  btn-sm btn-outline-secundary" href="{{ route('users.edit',$pro->id) }}"><img src="/bootstrap-icons/icons/newspaper.svg" ><span class="d-none d-xl-inline-block">Editar</span></a>
<div class='btn btn-sm btn-outline-secundary'><form action='{{ route("users.destroy",$pro->id) }}' method='POST'>@csrf @method('DELETE')<img src='/bootstrap-icons/icons/trash.svg' /><button type='submit' class='btn  d-none d-xl-inline-block'>Borrar</button></form></div>
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

