<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Pacientes')

    @if( $btn_lista == 1 )
        <a href="{{ route('roles.index') }}" class="btn btn-default" >
        <img src="/bootstrap-icons/icons/list.svg" />
        <span class="d-none d-xl-inline-block">@lang('dicc.VerLista')</span> 
         </a>
    @endif 

    @if( $btn_agregar == 1 )
        <a href="{{ route('roles.create') }}" class="btn btn-default" >
        <img src="/bootstrap-icons/icons/plus.svg" />
         <span class="d-none d-xl-inline-block">@lang('dicc.Nuevo')</span> 
         </a>
    @endif 

    @if( $btn_pdf == 1 )
        <a  class="btn btn-light" href='/funciones/verrerporte1'>
            <img src="/bootstrap-icons/icons/printer.svg" />
            <span class="d-none d-xl-inline-block">@lang('dicc.GenerarPDF')</span>
        </a>
    @endif 

    @if( $btn_excel == 1 && false )
        <button wire:click.prevent="verformulario('excel')" class="btn light">
        <img src="/bootstrap-icons/icons/download.svg" />
        <span class="d-none d-xl-inline-block">@lang('dicc.GenerarExcel')</span>
        </button>
    @endif 

    @if( $btn_importar == 1 && false )
        <button wire:click.prevent="verformulario('importar')" class="btn light">
        <img src="/bootstrap-icons/icons/upload.svg" />
        <span class="d-none d-xl-inline-block">@lang('dicc.ImportarDatos')</span>
        </button>
    @endif 

    </h5>
    <div class="card-body">

    <table id="example" class="display" style="width:100%">
        <thead>
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfNac')</th><th>@lang('dicc.NameOfCedula')</th><th>@lang('dicc.NameOfApellidos')</th><th>@lang('dicc.NameOfNombres')</th><th>@lang('dicc.NameOfSexo')</th><th>@lang('dicc.NameOfFnacimiento')</th><th>@lang('dicc.NameOfLnacimiento')</th><th>@lang('dicc.NameOfCodeestado')</th><th>@lang('dicc.NameOfDireccion')</th><th>@lang('dicc.NameOfTelefono')</th><th>@lang('dicc.NameOfFingreso')</th><th>@lang('dicc.NameOfEscolaridad')</th><th>@lang('dicc.NameOfOcupacion')</th><th>@lang('dicc.NameOfCodesegemp')</th><th>@lang('dicc.NameOfNumhistoria')</th><th>@lang('dicc.NameOfFoto_pac')</th><th>@lang('dicc.NameOfProfesion')</th><th>@lang('dicc.NameOfEmail')</th><th>@lang('dicc.NameOfDependencia')</th><th>@lang('dicc.NameOfMedico')</th><th>@lang('dicc.NameOfHistoria_aa')</th><th>@lang('dicc.NameOfCategoria')</th><th>@lang('dicc.NameOfSms')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->nac }}</td><td>{{ $registro->cedula }}</td><td>{{ $registro->apellidos }}</td><td>{{ $registro->nombres }}</td><td>{{ $registro->sexo }}</td><td>{{ $registro->fnacimiento }}</td><td>{{ $registro->lnacimiento }}</td><td>{{ $registro->codeestado }}</td><td>{{ $registro->direccion }}</td><td>{{ $registro->telefono }}</td><td>{{ $registro->fingreso }}</td><td>{{ $registro->escolaridad }}</td><td>{{ $registro->ocupacion }}</td><td>{{ $registro->codesegemp }}</td><td>{{ $registro->numhistoria }}</td><td>{{ $registro->foto_pac }}</td><td>{{ $registro->profesion }}</td><td>{{ $registro->email }}</td><td>{{ $registro->dependencia }}</td><td>{{ $registro->medico }}</td><td>{{ $registro->historia_aa }}</td><td>{{ $registro->categoria }}</td><td>{{ $registro->sms }}</td>
                    <td>
                    @if( $btn_ver == 1 )
                        <a  class="btn btn-light" href="{{ route('roles.show',$registro->id) }}">
                                               <img src="/bootstrap-icons/icons/eye.svg" />
                                                <span class="d-none d-xl-inline-block">@lang('dicc.Ver')</span>
                                            </a>
                                                                @endif

                                            @if( $btn_editar == 1 )

                        <a  class="btn btn-light" href="{{ route('roles.edit',$registro->id) }}">
                                               <img src="/bootstrap-icons/icons/newspaper.svg" >
                                                <span class="d-none d-xl-inline-block">@lang('dicc.Editar')</span>
                                            </a>
                               @endif

                    </td>
                    <td>
                        @if( $btn_eliminar == 1 )
                        <form action="{{ route('roles.destroy',$registro->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <img src="/bootstrap-icons/icons/trash.svg" />
                            <button type="submit" class="btn btn-default d-none d-xl-inline-block">@lang('dicc.Eliminar')</button>
                        </form>
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfNac')</th><th>@lang('dicc.NameOfCedula')</th><th>@lang('dicc.NameOfApellidos')</th><th>@lang('dicc.NameOfNombres')</th><th>@lang('dicc.NameOfSexo')</th><th>@lang('dicc.NameOfFnacimiento')</th><th>@lang('dicc.NameOfLnacimiento')</th><th>@lang('dicc.NameOfCodeestado')</th><th>@lang('dicc.NameOfDireccion')</th><th>@lang('dicc.NameOfTelefono')</th><th>@lang('dicc.NameOfFingreso')</th><th>@lang('dicc.NameOfEscolaridad')</th><th>@lang('dicc.NameOfOcupacion')</th><th>@lang('dicc.NameOfCodesegemp')</th><th>@lang('dicc.NameOfNumhistoria')</th><th>@lang('dicc.NameOfFoto_pac')</th><th>@lang('dicc.NameOfProfesion')</th><th>@lang('dicc.NameOfEmail')</th><th>@lang('dicc.NameOfDependencia')</th><th>@lang('dicc.NameOfMedico')</th><th>@lang('dicc.NameOfHistoria_aa')</th><th>@lang('dicc.NameOfCategoria')</th><th>@lang('dicc.NameOfSms')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
