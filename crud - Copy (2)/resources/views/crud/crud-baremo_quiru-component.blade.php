<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Baremo_quiru')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfConsecuti')</th><th>@lang('dicc.NameOfCod_inter')</th><th>@lang('dicc.NameOfCod_clini')</th><th>@lang('dicc.NameOfCed_paciente')</th><th>@lang('dicc.NameOfNom_interven')</th><th>@lang('dicc.NameOfNom_paciente')</th><th>@lang('dicc.NameOfFecha_creado')</th><th>@lang('dicc.NameOfFecha_opera')</th><th>@lang('dicc.NameOfHora_opera')</th><th>@lang('dicc.NameOfMonto_opera')</th><th>@lang('dicc.NameOfTipo_rol')</th><th>@lang('dicc.NameOfPagada')</th><th>@lang('dicc.NameOfMedico_prin')</th><th>@lang('dicc.NameOfMedico_aux')</th><th>@lang('dicc.NameOfHistoria')</th><th>@lang('dicc.NameOfDiagnostico')</th><th>@lang('dicc.NameOfMonto_abono')</th><th>@lang('dicc.NameOfMonto_resta')</th><th>@lang('dicc.NameOfEmpre')</th><th>@lang('dicc.NameOfHora_fin')</th><th>@lang('dicc.NameOfDuracion')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->consecuti }}</td><td>{{ $registro->cod_inter }}</td><td>{{ $registro->cod_clini }}</td><td>{{ $registro->ced_paciente }}</td><td>{{ $registro->nom_interven }}</td><td>{{ $registro->nom_paciente }}</td><td>{{ $registro->fecha_creado }}</td><td>{{ $registro->fecha_opera }}</td><td>{{ $registro->hora_opera }}</td><td>{{ $registro->monto_opera }}</td><td>{{ $registro->tipo_rol }}</td><td>{{ $registro->pagada }}</td><td>{{ $registro->medico_prin }}</td><td>{{ $registro->medico_aux }}</td><td>{{ $registro->historia }}</td><td>{{ $registro->diagnostico }}</td><td>{{ $registro->monto_abono }}</td><td>{{ $registro->monto_resta }}</td><td>{{ $registro->empre }}</td><td>{{ $registro->hora_fin }}</td><td>{{ $registro->duracion }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfConsecuti')</th><th>@lang('dicc.NameOfCod_inter')</th><th>@lang('dicc.NameOfCod_clini')</th><th>@lang('dicc.NameOfCed_paciente')</th><th>@lang('dicc.NameOfNom_interven')</th><th>@lang('dicc.NameOfNom_paciente')</th><th>@lang('dicc.NameOfFecha_creado')</th><th>@lang('dicc.NameOfFecha_opera')</th><th>@lang('dicc.NameOfHora_opera')</th><th>@lang('dicc.NameOfMonto_opera')</th><th>@lang('dicc.NameOfTipo_rol')</th><th>@lang('dicc.NameOfPagada')</th><th>@lang('dicc.NameOfMedico_prin')</th><th>@lang('dicc.NameOfMedico_aux')</th><th>@lang('dicc.NameOfHistoria')</th><th>@lang('dicc.NameOfDiagnostico')</th><th>@lang('dicc.NameOfMonto_abono')</th><th>@lang('dicc.NameOfMonto_resta')</th><th>@lang('dicc.NameOfEmpre')</th><th>@lang('dicc.NameOfHora_fin')</th><th>@lang('dicc.NameOfDuracion')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
