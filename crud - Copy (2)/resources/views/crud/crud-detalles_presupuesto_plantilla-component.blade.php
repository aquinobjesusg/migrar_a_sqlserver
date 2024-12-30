<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Detalles_presupuesto_plantilla')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfCod_inventario')</th><th>@lang('dicc.NameOfConsecutivo')</th><th>@lang('dicc.NameOfTipo_articulo')</th><th>@lang('dicc.NameOfNombre')</th><th>@lang('dicc.NameOfPrecio')</th><th>@lang('dicc.NameOfDescuento')</th><th>@lang('dicc.NameOfCantidad')</th><th>@lang('dicc.NameOfFecha_doc')</th><th>@lang('dicc.NameOfTipo_documento')</th><th>@lang('dicc.NameOfTotal_articulo')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->cod_inventario }}</td><td>{{ $registro->consecutivo }}</td><td>{{ $registro->tipo_articulo }}</td><td>{{ $registro->nombre }}</td><td>{{ $registro->precio }}</td><td>{{ $registro->descuento }}</td><td>{{ $registro->cantidad }}</td><td>{{ $registro->fecha_doc }}</td><td>{{ $registro->tipo_documento }}</td><td>{{ $registro->total_articulo }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfCod_inventario')</th><th>@lang('dicc.NameOfConsecutivo')</th><th>@lang('dicc.NameOfTipo_articulo')</th><th>@lang('dicc.NameOfNombre')</th><th>@lang('dicc.NameOfPrecio')</th><th>@lang('dicc.NameOfDescuento')</th><th>@lang('dicc.NameOfCantidad')</th><th>@lang('dicc.NameOfFecha_doc')</th><th>@lang('dicc.NameOfTipo_documento')</th><th>@lang('dicc.NameOfTotal_articulo')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
