<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Vademecum_m')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfCodemedicina')</th><th>@lang('dicc.NameOfNombregenerico')</th><th>@lang('dicc.NameOfNombrecomercial')</th><th>@lang('dicc.NameOfDosificacion')</th><th>@lang('dicc.NameOfUso')</th><th>@lang('dicc.NameOfPresentacion')</th><th>@lang('dicc.NameOfConcentracion')</th><th>@lang('dicc.NameOfCada')</th><th>@lang('dicc.NameOfDurante')</th><th>@lang('dicc.NameOfPvc')</th><th>@lang('dicc.NameOfPvs')</th><th>@lang('dicc.NameOfDosis')</th><th>@lang('dicc.NameOfSico')</th><th>@lang('dicc.NameOfNombrecomercial1')</th><th>@lang('dicc.NameOfNombrecomercial2')</th><th>@lang('dicc.NameOfNombrecomercial3')</th><th>@lang('dicc.NameOfTotalre')</th><th>@lang('dicc.NameOfSicome')</th><th>@lang('dicc.NameOfSicome1')</th><th>@lang('dicc.NameOfSicome2')</th><th>@lang('dicc.NameOfSicome3')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->codemedicina }}</td><td>{{ $registro->nombregenerico }}</td><td>{{ $registro->nombrecomercial }}</td><td>{{ $registro->dosificacion }}</td><td>{{ $registro->uso }}</td><td>{{ $registro->presentacion }}</td><td>{{ $registro->concentracion }}</td><td>{{ $registro->cada }}</td><td>{{ $registro->durante }}</td><td>{{ $registro->pvc }}</td><td>{{ $registro->pvs }}</td><td>{{ $registro->dosis }}</td><td>{{ $registro->sico }}</td><td>{{ $registro->nombrecomercial1 }}</td><td>{{ $registro->nombrecomercial2 }}</td><td>{{ $registro->nombrecomercial3 }}</td><td>{{ $registro->totalre }}</td><td>{{ $registro->sicome }}</td><td>{{ $registro->sicome1 }}</td><td>{{ $registro->sicome2 }}</td><td>{{ $registro->sicome3 }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfCodemedicina')</th><th>@lang('dicc.NameOfNombregenerico')</th><th>@lang('dicc.NameOfNombrecomercial')</th><th>@lang('dicc.NameOfDosificacion')</th><th>@lang('dicc.NameOfUso')</th><th>@lang('dicc.NameOfPresentacion')</th><th>@lang('dicc.NameOfConcentracion')</th><th>@lang('dicc.NameOfCada')</th><th>@lang('dicc.NameOfDurante')</th><th>@lang('dicc.NameOfPvc')</th><th>@lang('dicc.NameOfPvs')</th><th>@lang('dicc.NameOfDosis')</th><th>@lang('dicc.NameOfSico')</th><th>@lang('dicc.NameOfNombrecomercial1')</th><th>@lang('dicc.NameOfNombrecomercial2')</th><th>@lang('dicc.NameOfNombrecomercial3')</th><th>@lang('dicc.NameOfTotalre')</th><th>@lang('dicc.NameOfSicome')</th><th>@lang('dicc.NameOfSicome1')</th><th>@lang('dicc.NameOfSicome2')</th><th>@lang('dicc.NameOfSicome3')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
