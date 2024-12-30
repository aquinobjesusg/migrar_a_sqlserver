<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Presupuesto_operatorio')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfDocumento')</th><th>@lang('dicc.NameOfHistoria')</th><th>@lang('dicc.NameOfDiagnostico')</th><th>@lang('dicc.NameOfIntervencion')</th><th>@lang('dicc.NameOfAyudantes')</th><th>@lang('dicc.NameOfDias_hospi')</th><th>@lang('dicc.NameOfArco_c')</th><th>@lang('dicc.NameOfAstroscopio')</th><th>@lang('dicc.NameOfSangre_qx_tipo_1')</th><th>@lang('dicc.NameOfSangre_qx_tipo_2')</th><th>@lang('dicc.NameOfSangre_qx_tipo_1_cantidad')</th><th>@lang('dicc.NameOfSangre_qx_tipo_2_cantidad')</th><th>@lang('dicc.NameOfMaterial_sintesis')</th><th>@lang('dicc.NameOfInstrumental_traumatologico')</th><th>@lang('dicc.NameOfHonorarios')</th><th>@lang('dicc.NameOfObservaciones')</th><th>@lang('dicc.NameOfFecha')</th><th>@lang('dicc.NameOfEstado')</th><th>@lang('dicc.NameOfClinica')</th><th>@lang('dicc.NameOfProcedencia')</th><th>@lang('dicc.NameOfH_1_ayudante')</th><th>@lang('dicc.NameOfHoras_quirofano')</th><th>@lang('dicc.NameOfH_2_ayudante')</th><th>@lang('dicc.NameOfH_anestesiologo')</th><th>@lang('dicc.NameOfRx_postoperatoria')</th><th>@lang('dicc.NameOfRx_torax')</th><th>@lang('dicc.NameOfH_tratante')</th><th>@lang('dicc.NameOfFluoroscopio')</th><th>@lang('dicc.NameOfH_artroscopio')</th><th>@lang('dicc.NameOfEval_preoperatoria')</th><th>@lang('dicc.NameOfOtros_estudios_de_imagenes')</th><th>@lang('dicc.NameOfInterconsultas')</th><th>@lang('dicc.NameOfOtro_1_tex')</th><th>@lang('dicc.NameOfOtro_1_deta')</th><th>@lang('dicc.NameOfOtro_2_tex')</th><th>@lang('dicc.NameOfOtro_2_deta')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->documento }}</td><td>{{ $registro->historia }}</td><td>{{ $registro->diagnostico }}</td><td>{{ $registro->intervencion }}</td><td>{{ $registro->ayudantes }}</td><td>{{ $registro->dias_hospi }}</td><td>{{ $registro->arco_c }}</td><td>{{ $registro->astroscopio }}</td><td>{{ $registro->sangre_qx_tipo_1 }}</td><td>{{ $registro->sangre_qx_tipo_2 }}</td><td>{{ $registro->sangre_qx_tipo_1_cantidad }}</td><td>{{ $registro->sangre_qx_tipo_2_cantidad }}</td><td>{{ $registro->material_sintesis }}</td><td>{{ $registro->instrumental_traumatologico }}</td><td>{{ $registro->honorarios }}</td><td>{{ $registro->observaciones }}</td><td>{{ $registro->fecha }}</td><td>{{ $registro->estado }}</td><td>{{ $registro->clinica }}</td><td>{{ $registro->procedencia }}</td><td>{{ $registro->h_1_ayudante }}</td><td>{{ $registro->horas_quirofano }}</td><td>{{ $registro->h_2_ayudante }}</td><td>{{ $registro->h_anestesiologo }}</td><td>{{ $registro->rx_postoperatoria }}</td><td>{{ $registro->rx_torax }}</td><td>{{ $registro->h_tratante }}</td><td>{{ $registro->fluoroscopio }}</td><td>{{ $registro->h_artroscopio }}</td><td>{{ $registro->eval_preoperatoria }}</td><td>{{ $registro->otros_estudios_de_imagenes }}</td><td>{{ $registro->interconsultas }}</td><td>{{ $registro->otro_1_tex }}</td><td>{{ $registro->otro_1_deta }}</td><td>{{ $registro->otro_2_tex }}</td><td>{{ $registro->otro_2_deta }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfDocumento')</th><th>@lang('dicc.NameOfHistoria')</th><th>@lang('dicc.NameOfDiagnostico')</th><th>@lang('dicc.NameOfIntervencion')</th><th>@lang('dicc.NameOfAyudantes')</th><th>@lang('dicc.NameOfDias_hospi')</th><th>@lang('dicc.NameOfArco_c')</th><th>@lang('dicc.NameOfAstroscopio')</th><th>@lang('dicc.NameOfSangre_qx_tipo_1')</th><th>@lang('dicc.NameOfSangre_qx_tipo_2')</th><th>@lang('dicc.NameOfSangre_qx_tipo_1_cantidad')</th><th>@lang('dicc.NameOfSangre_qx_tipo_2_cantidad')</th><th>@lang('dicc.NameOfMaterial_sintesis')</th><th>@lang('dicc.NameOfInstrumental_traumatologico')</th><th>@lang('dicc.NameOfHonorarios')</th><th>@lang('dicc.NameOfObservaciones')</th><th>@lang('dicc.NameOfFecha')</th><th>@lang('dicc.NameOfEstado')</th><th>@lang('dicc.NameOfClinica')</th><th>@lang('dicc.NameOfProcedencia')</th><th>@lang('dicc.NameOfH_1_ayudante')</th><th>@lang('dicc.NameOfHoras_quirofano')</th><th>@lang('dicc.NameOfH_2_ayudante')</th><th>@lang('dicc.NameOfH_anestesiologo')</th><th>@lang('dicc.NameOfRx_postoperatoria')</th><th>@lang('dicc.NameOfRx_torax')</th><th>@lang('dicc.NameOfH_tratante')</th><th>@lang('dicc.NameOfFluoroscopio')</th><th>@lang('dicc.NameOfH_artroscopio')</th><th>@lang('dicc.NameOfEval_preoperatoria')</th><th>@lang('dicc.NameOfOtros_estudios_de_imagenes')</th><th>@lang('dicc.NameOfInterconsultas')</th><th>@lang('dicc.NameOfOtro_1_tex')</th><th>@lang('dicc.NameOfOtro_1_deta')</th><th>@lang('dicc.NameOfOtro_2_tex')</th><th>@lang('dicc.NameOfOtro_2_deta')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
