<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Orden_ingreso')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfHistoria')</th><th>@lang('dicc.NameOfConsulta')</th><th>@lang('dicc.NameOfFecha_operacion')</th><th>@lang('dicc.NameOfFecha_reporte')</th><th>@lang('dicc.NameOfTexto')</th><th>@lang('dicc.NameOfIdx')</th><th>@lang('dicc.NameOfReco_ingresar')</th><th>@lang('dicc.NameOfReco_depi')</th><th>@lang('dicc.NameOfReco_llevar')</th><th>@lang('dicc.NameOfReco_cedroxin')</th><th>@lang('dicc.NameOfReco_ejercicios')</th><th>@lang('dicc.NameOfReco_terapia')</th><th>@lang('dicc.NameOfReco_control')</th><th>@lang('dicc.NameOfReco_higiene')</th><th>@lang('dicc.NameOfReco_ropa')</th><th>@lang('dicc.NameOfReco_tomar')</th><th>@lang('dicc.NameOfReco_clexane')</th><th>@lang('dicc.NameOfReco_ejercicios_res')</th><th>@lang('dicc.NameOfReco_sangre')</th><th>@lang('dicc.NameOfReco_avisar')</th><th>@lang('dicc.NameOfDetalle')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->historia }}</td><td>{{ $registro->consulta }}</td><td>{{ $registro->fecha_operacion }}</td><td>{{ $registro->fecha_reporte }}</td><td>{{ $registro->texto }}</td><td>{{ $registro->idx }}</td><td>{{ $registro->reco_ingresar }}</td><td>{{ $registro->reco_depi }}</td><td>{{ $registro->reco_llevar }}</td><td>{{ $registro->reco_cedroxin }}</td><td>{{ $registro->reco_ejercicios }}</td><td>{{ $registro->reco_terapia }}</td><td>{{ $registro->reco_control }}</td><td>{{ $registro->reco_higiene }}</td><td>{{ $registro->reco_ropa }}</td><td>{{ $registro->reco_tomar }}</td><td>{{ $registro->reco_clexane }}</td><td>{{ $registro->reco_ejercicios_res }}</td><td>{{ $registro->reco_sangre }}</td><td>{{ $registro->reco_avisar }}</td><td>{{ $registro->detalle }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfHistoria')</th><th>@lang('dicc.NameOfConsulta')</th><th>@lang('dicc.NameOfFecha_operacion')</th><th>@lang('dicc.NameOfFecha_reporte')</th><th>@lang('dicc.NameOfTexto')</th><th>@lang('dicc.NameOfIdx')</th><th>@lang('dicc.NameOfReco_ingresar')</th><th>@lang('dicc.NameOfReco_depi')</th><th>@lang('dicc.NameOfReco_llevar')</th><th>@lang('dicc.NameOfReco_cedroxin')</th><th>@lang('dicc.NameOfReco_ejercicios')</th><th>@lang('dicc.NameOfReco_terapia')</th><th>@lang('dicc.NameOfReco_control')</th><th>@lang('dicc.NameOfReco_higiene')</th><th>@lang('dicc.NameOfReco_ropa')</th><th>@lang('dicc.NameOfReco_tomar')</th><th>@lang('dicc.NameOfReco_clexane')</th><th>@lang('dicc.NameOfReco_ejercicios_res')</th><th>@lang('dicc.NameOfReco_sangre')</th><th>@lang('dicc.NameOfReco_avisar')</th><th>@lang('dicc.NameOfDetalle')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
