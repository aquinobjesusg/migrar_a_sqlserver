@extends('dashboard1')

@section('content-table')

<?php use App\Modelo\Contratos;$products = Contratos::all(); ?>

<div class="card">

<h5 class="card-header">CONTRATOS</h5>



<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
<a class="btn btn-sm btn-outline-secundary" href="{{ route('contratos.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /><span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
<th>ID</th><th>NACIONALIDAD_TITULAR</th><th>CEDULA_TITULAR</th><th>NOMBRE_TITULAR_BENEFICIARIO</th><th>APELLIDO_TITULAR_BENEFICIARIO</th><th>ESTADO_CIVIL</th><th>SEXO_TITULAR_BENEFICIARIO</th><th>FECHA_NACIMIENTO_TITULAR_BENEFICIARIO</th><th>PARENTESCO</th><th>NOMBRE_AGENTE_RECAUDADOR</th><th>TIPO_DE_CUENTA</th><th>NUMERO_DE_CUENTA</th><th>TIPO_DE_VENCIMIENTO</th><th>CODIGO_EMPRESA</th><th>CODIGO_SUCURSAL</th><th>NUMERO_DE_TELEFONO</th><th>CORREO_ELECTRONICO</th><th>CODIGO_CIA_SEGURO</th><th>CODIGO_PLAN_EN_SISER</th><th>CODIGO_PRODUCTOR_ASESOR</th><th>ESTADO</th><th>ESTADO_OBSERVACION</th>
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
<td>{{$pro->id}}</td><td>{{$pro->Nacionalidad_Titular}}</td><td>{{$pro->Cedula_Titular}}</td><td>{{$pro->Nombre_TItular_Beneficiario}}</td><td>{{$pro->Apellido_TItular_Beneficiario}}</td><td>{{$pro->Estado_Civil}}</td><td>{{$pro->Sexo_Titular_Beneficiario}}</td><td>{{$pro->Fecha_Nacimiento_Titular_Beneficiario}}</td><td>{{$pro->Parentesco}}</td><td>{{$pro->Nombre_Agente_Recaudador}}</td><td>{{$pro->Tipo_de_Cuenta}}</td><td>{{$pro->Numero_de_Cuenta}}</td><td>{{$pro->Tipo_de_Vencimiento}}</td><td>{{$pro->Codigo_Empresa}}</td><td>{{$pro->Codigo_Sucursal}}</td><td>{{$pro->Numero_de_Telefono}}</td><td>{{$pro->Correo_Electronico}}</td><td>{{$pro->Codigo_Cia_Seguro}}</td><td>{{$pro->Codigo_Plan_en_SISER}}</td><td>{{$pro->Codigo_Productor_Asesor}}</td><td>{{$pro->Estado}}</td><td>{{$pro->Estado_Observacion}}</td>
              <td>
                <div class="btn-group me-2">
 <a class="btn btn-sm btn-outline-secundary" href="{{ route('contratos.show',$pro->id) }}">         <img src="/bootstrap-icons/icons/eye.svg" />        <span class="d-none d-xl-inline-block">Ver</span>    </a>
<a class="btn  btn-sm btn-outline-secundary" href="{{ route('contratos.edit',$pro->id) }}"><img src="/bootstrap-icons/icons/newspaper.svg" ><span class="d-none d-xl-inline-block">Editar</span></a>
<div class='btn btn-sm btn-outline-secundary'><form action='{{ route("contratos.destroy",$pro->id) }}' method='POST'>@csrf @method('DELETE')<img src='/bootstrap-icons/icons/trash.svg' /><button type='submit' class='btn  d-none d-xl-inline-block'>Borrar</button></form></div>
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

