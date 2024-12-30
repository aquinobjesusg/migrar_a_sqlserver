<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Evolucion')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfEspecialidad')</th><th>@lang('dicc.NameOfCiudad')</th><th>@lang('dicc.NameOfLogo')</th><th>@lang('dicc.NameOfLinea_1')</th><th>@lang('dicc.NameOfLinea_2')</th><th>@lang('dicc.NameOfLinea_3')</th><th>@lang('dicc.NameOfLineag_1')</th><th>@lang('dicc.NameOfLineag_2')</th><th>@lang('dicc.NameOfClave')</th><th>@lang('dicc.NameOfFecha')</th><th>@lang('dicc.NameOfRif')</th><th>@lang('dicc.NameOfReporte_vacio')</th><th>@lang('dicc.NameOfMoneda')</th><th>@lang('dicc.NameOfImpuesto')</th><th>@lang('dicc.NameOfPor_impues')</th><th>@lang('dicc.NameOfAm_pm')</th><th>@lang('dicc.NameOfCantidad_paciente')</th><th>@lang('dicc.NameOfLunes_i')</th><th>@lang('dicc.NameOfLunes_f')</th><th>@lang('dicc.NameOfMartes_i')</th><th>@lang('dicc.NameOfMartes_f')</th><th>@lang('dicc.NameOfMiercoles_i')</th><th>@lang('dicc.NameOfMiercoles_f')</th><th>@lang('dicc.NameOfJueves_i')</th><th>@lang('dicc.NameOfJueves_f')</th><th>@lang('dicc.NameOfVienes_i')</th><th>@lang('dicc.NameOfViernes_f')</th><th>@lang('dicc.NameOfSabado_i')</th><th>@lang('dicc.NameOfSabado_f')</th><th>@lang('dicc.NameOfTiempo_paci')</th><th>@lang('dicc.NameOfDomingo_i')</th><th>@lang('dicc.NameOfDomigo_f')</th><th>@lang('dicc.NameOfLunes')</th><th>@lang('dicc.NameOfMartes')</th><th>@lang('dicc.NameOfMiercoles')</th><th>@lang('dicc.NameOfJueves')</th><th>@lang('dicc.NameOfViernes')</th><th>@lang('dicc.NameOfSabado')</th><th>@lang('dicc.NameOfDomingo')</th><th>@lang('dicc.NameOfFeriado')</th><th>@lang('dicc.NameOfCedula')</th><th>@lang('dicc.NameOfMin_salud')</th><th>@lang('dicc.NameOfCol_med')</th><th>@lang('dicc.NameOfCita_previa')</th><th>@lang('dicc.NameOfTelefono')</th><th>@lang('dicc.NameOfCobra_honorarios')</th><th>@lang('dicc.NameOfPor_cobranza')</th><th>@lang('dicc.NameOfPor_retención_seg')</th><th>@lang('dicc.NameOfPor_retención_part')</th><th>@lang('dicc.NameOfAccionista')</th><th>@lang('dicc.NameOfConsultorio')</th><th>@lang('dicc.NameOfContrasena')</th><th>@lang('dicc.NameOfPaga_iva')</th><th>@lang('dicc.NameOfSms_proveedor')</th><th>@lang('dicc.NameOfSms_user')</th><th>@lang('dicc.NameOfSms_clave')</th><th>@lang('dicc.NameOfSms_cantidad_total')</th><th>@lang('dicc.NameOfSms_telefono_llamada')</th><th>@lang('dicc.NameOfSms_sexo_medico')</th><th>@lang('dicc.NameOfCorreo_med')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->especialidad }}</td><td>{{ $registro->ciudad }}</td><td>{{ $registro->logo }}</td><td>{{ $registro->linea_1 }}</td><td>{{ $registro->linea_2 }}</td><td>{{ $registro->linea_3 }}</td><td>{{ $registro->lineag_1 }}</td><td>{{ $registro->lineag_2 }}</td><td>{{ $registro->clave }}</td><td>{{ $registro->fecha }}</td><td>{{ $registro->rif }}</td><td>{{ $registro->reporte_vacio }}</td><td>{{ $registro->moneda }}</td><td>{{ $registro->impuesto }}</td><td>{{ $registro->por_impues }}</td><td>{{ $registro->am_pm }}</td><td>{{ $registro->cantidad_paciente }}</td><td>{{ $registro->lunes_i }}</td><td>{{ $registro->lunes_f }}</td><td>{{ $registro->martes_i }}</td><td>{{ $registro->martes_f }}</td><td>{{ $registro->miercoles_i }}</td><td>{{ $registro->miercoles_f }}</td><td>{{ $registro->jueves_i }}</td><td>{{ $registro->jueves_f }}</td><td>{{ $registro->vienes_i }}</td><td>{{ $registro->viernes_f }}</td><td>{{ $registro->sabado_i }}</td><td>{{ $registro->sabado_f }}</td><td>{{ $registro->tiempo_paci }}</td><td>{{ $registro->domingo_i }}</td><td>{{ $registro->domigo_f }}</td><td>{{ $registro->lunes }}</td><td>{{ $registro->martes }}</td><td>{{ $registro->miercoles }}</td><td>{{ $registro->jueves }}</td><td>{{ $registro->viernes }}</td><td>{{ $registro->sabado }}</td><td>{{ $registro->domingo }}</td><td>{{ $registro->feriado }}</td><td>{{ $registro->cedula }}</td><td>{{ $registro->min_salud }}</td><td>{{ $registro->col_med }}</td><td>{{ $registro->cita_previa }}</td><td>{{ $registro->telefono }}</td><td>{{ $registro->cobra_honorarios }}</td><td>{{ $registro->por_cobranza }}</td><td>{{ $registro->por_retención_seg }}</td><td>{{ $registro->por_retención_part }}</td><td>{{ $registro->accionista }}</td><td>{{ $registro->consultorio }}</td><td>{{ $registro->contrasena }}</td><td>{{ $registro->paga_iva }}</td><td>{{ $registro->sms_proveedor }}</td><td>{{ $registro->sms_user }}</td><td>{{ $registro->sms_clave }}</td><td>{{ $registro->sms_cantidad_total }}</td><td>{{ $registro->sms_telefono_llamada }}</td><td>{{ $registro->sms_sexo_medico }}</td><td>{{ $registro->correo_med }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfEspecialidad')</th><th>@lang('dicc.NameOfCiudad')</th><th>@lang('dicc.NameOfLogo')</th><th>@lang('dicc.NameOfLinea_1')</th><th>@lang('dicc.NameOfLinea_2')</th><th>@lang('dicc.NameOfLinea_3')</th><th>@lang('dicc.NameOfLineag_1')</th><th>@lang('dicc.NameOfLineag_2')</th><th>@lang('dicc.NameOfClave')</th><th>@lang('dicc.NameOfFecha')</th><th>@lang('dicc.NameOfRif')</th><th>@lang('dicc.NameOfReporte_vacio')</th><th>@lang('dicc.NameOfMoneda')</th><th>@lang('dicc.NameOfImpuesto')</th><th>@lang('dicc.NameOfPor_impues')</th><th>@lang('dicc.NameOfAm_pm')</th><th>@lang('dicc.NameOfCantidad_paciente')</th><th>@lang('dicc.NameOfLunes_i')</th><th>@lang('dicc.NameOfLunes_f')</th><th>@lang('dicc.NameOfMartes_i')</th><th>@lang('dicc.NameOfMartes_f')</th><th>@lang('dicc.NameOfMiercoles_i')</th><th>@lang('dicc.NameOfMiercoles_f')</th><th>@lang('dicc.NameOfJueves_i')</th><th>@lang('dicc.NameOfJueves_f')</th><th>@lang('dicc.NameOfVienes_i')</th><th>@lang('dicc.NameOfViernes_f')</th><th>@lang('dicc.NameOfSabado_i')</th><th>@lang('dicc.NameOfSabado_f')</th><th>@lang('dicc.NameOfTiempo_paci')</th><th>@lang('dicc.NameOfDomingo_i')</th><th>@lang('dicc.NameOfDomigo_f')</th><th>@lang('dicc.NameOfLunes')</th><th>@lang('dicc.NameOfMartes')</th><th>@lang('dicc.NameOfMiercoles')</th><th>@lang('dicc.NameOfJueves')</th><th>@lang('dicc.NameOfViernes')</th><th>@lang('dicc.NameOfSabado')</th><th>@lang('dicc.NameOfDomingo')</th><th>@lang('dicc.NameOfFeriado')</th><th>@lang('dicc.NameOfCedula')</th><th>@lang('dicc.NameOfMin_salud')</th><th>@lang('dicc.NameOfCol_med')</th><th>@lang('dicc.NameOfCita_previa')</th><th>@lang('dicc.NameOfTelefono')</th><th>@lang('dicc.NameOfCobra_honorarios')</th><th>@lang('dicc.NameOfPor_cobranza')</th><th>@lang('dicc.NameOfPor_retención_seg')</th><th>@lang('dicc.NameOfPor_retención_part')</th><th>@lang('dicc.NameOfAccionista')</th><th>@lang('dicc.NameOfConsultorio')</th><th>@lang('dicc.NameOfContrasena')</th><th>@lang('dicc.NameOfPaga_iva')</th><th>@lang('dicc.NameOfSms_proveedor')</th><th>@lang('dicc.NameOfSms_user')</th><th>@lang('dicc.NameOfSms_clave')</th><th>@lang('dicc.NameOfSms_cantidad_total')</th><th>@lang('dicc.NameOfSms_telefono_llamada')</th><th>@lang('dicc.NameOfSms_sexo_medico')</th><th>@lang('dicc.NameOfCorreo_med')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
