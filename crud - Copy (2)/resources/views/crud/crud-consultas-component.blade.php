<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Consultas')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfNumhistoria')</th><th>@lang('dicc.NameOfNroconsulta')</th><th>@lang('dicc.NameOfFecha')</th><th>@lang('dicc.NameOfEnfermedadactual')</th><th>@lang('dicc.NameOfPeso')</th><th>@lang('dicc.NameOfTalla')</th><th>@lang('dicc.NameOfFc')</th><th>@lang('dicc.NameOfPp')</th><th>@lang('dicc.NameOfCirccefalica')</th><th>@lang('dicc.NameOfCirctoraxica')</th><th>@lang('dicc.NameOfCircabdominal')</th><th>@lang('dicc.NameOfTasentado')</th><th>@lang('dicc.NameOfTaacostado')</th><th>@lang('dicc.NameOfTapie')</th><th>@lang('dicc.NameOfResultadoexamencomp')</th><th>@lang('dicc.NameOfEliminado')</th><th>@lang('dicc.NameOfFaringe')</th><th>@lang('dicc.NameOfNariz')</th><th>@lang('dicc.NameOfOido')</th><th>@lang('dicc.NameOfLaringe')</th><th>@lang('dicc.NameOfCuello')</th><th>@lang('dicc.NameOfOtros')</th><th>@lang('dicc.NameOfEvolucion')</th><th>@lang('dicc.NameOfObservaciones')</th><th>@lang('dicc.NameOfMedico')</th><th>@lang('dicc.NameOfReceta')</th><th>@lang('dicc.NameOfReceta_indi')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->numhistoria }}</td><td>{{ $registro->nroconsulta }}</td><td>{{ $registro->fecha }}</td><td>{{ $registro->enfermedadactual }}</td><td>{{ $registro->peso }}</td><td>{{ $registro->talla }}</td><td>{{ $registro->fc }}</td><td>{{ $registro->pp }}</td><td>{{ $registro->circcefalica }}</td><td>{{ $registro->circtoraxica }}</td><td>{{ $registro->circabdominal }}</td><td>{{ $registro->tasentado }}</td><td>{{ $registro->taacostado }}</td><td>{{ $registro->tapie }}</td><td>{{ $registro->resultadoexamencomp }}</td><td>{{ $registro->eliminado }}</td><td>{{ $registro->faringe }}</td><td>{{ $registro->nariz }}</td><td>{{ $registro->oido }}</td><td>{{ $registro->laringe }}</td><td>{{ $registro->cuello }}</td><td>{{ $registro->otros }}</td><td>{{ $registro->evolucion }}</td><td>{{ $registro->observaciones }}</td><td>{{ $registro->medico }}</td><td>{{ $registro->receta }}</td><td>{{ $registro->receta_indi }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfNumhistoria')</th><th>@lang('dicc.NameOfNroconsulta')</th><th>@lang('dicc.NameOfFecha')</th><th>@lang('dicc.NameOfEnfermedadactual')</th><th>@lang('dicc.NameOfPeso')</th><th>@lang('dicc.NameOfTalla')</th><th>@lang('dicc.NameOfFc')</th><th>@lang('dicc.NameOfPp')</th><th>@lang('dicc.NameOfCirccefalica')</th><th>@lang('dicc.NameOfCirctoraxica')</th><th>@lang('dicc.NameOfCircabdominal')</th><th>@lang('dicc.NameOfTasentado')</th><th>@lang('dicc.NameOfTaacostado')</th><th>@lang('dicc.NameOfTapie')</th><th>@lang('dicc.NameOfResultadoexamencomp')</th><th>@lang('dicc.NameOfEliminado')</th><th>@lang('dicc.NameOfFaringe')</th><th>@lang('dicc.NameOfNariz')</th><th>@lang('dicc.NameOfOido')</th><th>@lang('dicc.NameOfLaringe')</th><th>@lang('dicc.NameOfCuello')</th><th>@lang('dicc.NameOfOtros')</th><th>@lang('dicc.NameOfEvolucion')</th><th>@lang('dicc.NameOfObservaciones')</th><th>@lang('dicc.NameOfMedico')</th><th>@lang('dicc.NameOfReceta')</th><th>@lang('dicc.NameOfReceta_indi')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
