<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Factura_cliente')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfNumfactura')</th><th>@lang('dicc.NameOfCedu_rif')</th><th>@lang('dicc.NameOfFecha_factura')</th><th>@lang('dicc.NameOfFecha_vence_fact')</th><th>@lang('dicc.NameOfFecha_cance_fact')</th><th>@lang('dicc.NameOfCliente')</th><th>@lang('dicc.NameOfStatus_factura')</th><th>@lang('dicc.NameOfTipo_factura')</th><th>@lang('dicc.NameOfPaciente')</th><th>@lang('dicc.NameOfNom_paciente')</th><th>@lang('dicc.NameOfTipo_precio')</th><th>@lang('dicc.NameOfNro_orden')</th><th>@lang('dicc.NameOfTotal_costo')</th><th>@lang('dicc.NameOfTotal_neto')</th><th>@lang('dicc.NameOfTotal_bruto')</th><th>@lang('dicc.NameOfTotal_final')</th><th>@lang('dicc.NameOfTotal_descuento')</th><th>@lang('dicc.NameOfDescuento_linea')</th><th>@lang('dicc.NameOfNotas')</th><th>@lang('dicc.NameOfHora_documento')</th><th>@lang('dicc.NameOfMonto_pac')</th><th>@lang('dicc.NameOfMonto_emp')</th><th>@lang('dicc.NameOfNumero_consulta')</th><th>@lang('dicc.NameOfNumero_historia')</th><th>@lang('dicc.NameOfTipo_doc')</th><th>@lang('dicc.NameOfMedico')</th><th>@lang('dicc.NameOfNro_cxp')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->numfactura }}</td><td>{{ $registro->cedu_rif }}</td><td>{{ $registro->fecha_factura }}</td><td>{{ $registro->fecha_vence_fact }}</td><td>{{ $registro->fecha_cance_fact }}</td><td>{{ $registro->cliente }}</td><td>{{ $registro->status_factura }}</td><td>{{ $registro->tipo_factura }}</td><td>{{ $registro->paciente }}</td><td>{{ $registro->nom_paciente }}</td><td>{{ $registro->tipo_precio }}</td><td>{{ $registro->nro_orden }}</td><td>{{ $registro->total_costo }}</td><td>{{ $registro->total_neto }}</td><td>{{ $registro->total_bruto }}</td><td>{{ $registro->total_final }}</td><td>{{ $registro->total_descuento }}</td><td>{{ $registro->descuento_linea }}</td><td>{{ $registro->notas }}</td><td>{{ $registro->hora_documento }}</td><td>{{ $registro->monto_pac }}</td><td>{{ $registro->monto_emp }}</td><td>{{ $registro->numero_consulta }}</td><td>{{ $registro->numero_historia }}</td><td>{{ $registro->tipo_doc }}</td><td>{{ $registro->medico }}</td><td>{{ $registro->nro_cxp }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfNumfactura')</th><th>@lang('dicc.NameOfCedu_rif')</th><th>@lang('dicc.NameOfFecha_factura')</th><th>@lang('dicc.NameOfFecha_vence_fact')</th><th>@lang('dicc.NameOfFecha_cance_fact')</th><th>@lang('dicc.NameOfCliente')</th><th>@lang('dicc.NameOfStatus_factura')</th><th>@lang('dicc.NameOfTipo_factura')</th><th>@lang('dicc.NameOfPaciente')</th><th>@lang('dicc.NameOfNom_paciente')</th><th>@lang('dicc.NameOfTipo_precio')</th><th>@lang('dicc.NameOfNro_orden')</th><th>@lang('dicc.NameOfTotal_costo')</th><th>@lang('dicc.NameOfTotal_neto')</th><th>@lang('dicc.NameOfTotal_bruto')</th><th>@lang('dicc.NameOfTotal_final')</th><th>@lang('dicc.NameOfTotal_descuento')</th><th>@lang('dicc.NameOfDescuento_linea')</th><th>@lang('dicc.NameOfNotas')</th><th>@lang('dicc.NameOfHora_documento')</th><th>@lang('dicc.NameOfMonto_pac')</th><th>@lang('dicc.NameOfMonto_emp')</th><th>@lang('dicc.NameOfNumero_consulta')</th><th>@lang('dicc.NameOfNumero_historia')</th><th>@lang('dicc.NameOfTipo_doc')</th><th>@lang('dicc.NameOfMedico')</th><th>@lang('dicc.NameOfNro_cxp')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
