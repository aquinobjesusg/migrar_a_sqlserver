<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Implante')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfHistoria')</th><th>@lang('dicc.NameOfConsulta')</th><th>@lang('dicc.NameOfFecha_reporte')</th><th>@lang('dicc.NameOfFecha_opera')</th><th>@lang('dicc.NameOfDiagnostico')</th><th>@lang('dicc.NameOfPlan_operatorio')</th><th>@lang('dicc.NameOfTexto')</th><th>@lang('dicc.NameOfEstabilizada')</th><th>@lang('dicc.NameOfComponente_femoral')</th><th>@lang('dicc.NameOfComponente_tibial')</th><th>@lang('dicc.NameOfComponente_tibial_it')</th><th>@lang('dicc.NameOfComponente_pastelar')</th><th>@lang('dicc.NameOfReque_metilmeticatrilato')</th><th>@lang('dicc.NameOfReque_metilmeticatrilato_cant')</th><th>@lang('dicc.NameOfReque_steridrape')</th><th>@lang('dicc.NameOfReque_steridrape_cant')</th><th>@lang('dicc.NameOfReque_coban_esteril')</th><th>@lang('dicc.NameOfReque_coban_esteril_cant')</th><th>@lang('dicc.NameOfReque_autosutura')</th><th>@lang('dicc.NameOfReque_autosutura_cant')</th><th>@lang('dicc.NameOfReque_orthopack')</th><th>@lang('dicc.NameOfReque_orthopack_cant')</th><th>@lang('dicc.NameOfSistema')</th><th>@lang('dicc.NameOfMarca')</th><th>@lang('dicc.NameOfTipo')</th><th>@lang('dicc.NameOfPuro_texto')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->historia }}</td><td>{{ $registro->consulta }}</td><td>{{ $registro->fecha_reporte }}</td><td>{{ $registro->fecha_opera }}</td><td>{{ $registro->diagnostico }}</td><td>{{ $registro->plan_operatorio }}</td><td>{{ $registro->texto }}</td><td>{{ $registro->estabilizada }}</td><td>{{ $registro->componente_femoral }}</td><td>{{ $registro->componente_tibial }}</td><td>{{ $registro->componente_tibial_it }}</td><td>{{ $registro->componente_pastelar }}</td><td>{{ $registro->reque_metilmeticatrilato }}</td><td>{{ $registro->reque_metilmeticatrilato_cant }}</td><td>{{ $registro->reque_steridrape }}</td><td>{{ $registro->reque_steridrape_cant }}</td><td>{{ $registro->reque_coban_esteril }}</td><td>{{ $registro->reque_coban_esteril_cant }}</td><td>{{ $registro->reque_autosutura }}</td><td>{{ $registro->reque_autosutura_cant }}</td><td>{{ $registro->reque_orthopack }}</td><td>{{ $registro->reque_orthopack_cant }}</td><td>{{ $registro->sistema }}</td><td>{{ $registro->marca }}</td><td>{{ $registro->tipo }}</td><td>{{ $registro->puro_texto }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfHistoria')</th><th>@lang('dicc.NameOfConsulta')</th><th>@lang('dicc.NameOfFecha_reporte')</th><th>@lang('dicc.NameOfFecha_opera')</th><th>@lang('dicc.NameOfDiagnostico')</th><th>@lang('dicc.NameOfPlan_operatorio')</th><th>@lang('dicc.NameOfTexto')</th><th>@lang('dicc.NameOfEstabilizada')</th><th>@lang('dicc.NameOfComponente_femoral')</th><th>@lang('dicc.NameOfComponente_tibial')</th><th>@lang('dicc.NameOfComponente_tibial_it')</th><th>@lang('dicc.NameOfComponente_pastelar')</th><th>@lang('dicc.NameOfReque_metilmeticatrilato')</th><th>@lang('dicc.NameOfReque_metilmeticatrilato_cant')</th><th>@lang('dicc.NameOfReque_steridrape')</th><th>@lang('dicc.NameOfReque_steridrape_cant')</th><th>@lang('dicc.NameOfReque_coban_esteril')</th><th>@lang('dicc.NameOfReque_coban_esteril_cant')</th><th>@lang('dicc.NameOfReque_autosutura')</th><th>@lang('dicc.NameOfReque_autosutura_cant')</th><th>@lang('dicc.NameOfReque_orthopack')</th><th>@lang('dicc.NameOfReque_orthopack_cant')</th><th>@lang('dicc.NameOfSistema')</th><th>@lang('dicc.NameOfMarca')</th><th>@lang('dicc.NameOfTipo')</th><th>@lang('dicc.NameOfPuro_texto')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
