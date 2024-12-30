<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Pbcattbl')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfPbt_tnam')</th><th>@lang('dicc.NameOfPbt_tid')</th><th>@lang('dicc.NameOfPbt_ownr')</th><th>@lang('dicc.NameOfPbd_fhgt')</th><th>@lang('dicc.NameOfPbd_fwgt')</th><th>@lang('dicc.NameOfPbd_fitl')</th><th>@lang('dicc.NameOfPbd_funl')</th><th>@lang('dicc.NameOfPbd_fchr')</th><th>@lang('dicc.NameOfPbd_fptc')</th><th>@lang('dicc.NameOfPbd_ffce')</th><th>@lang('dicc.NameOfPbh_fhgt')</th><th>@lang('dicc.NameOfPbh_fwgt')</th><th>@lang('dicc.NameOfPbh_fitl')</th><th>@lang('dicc.NameOfPbh_funl')</th><th>@lang('dicc.NameOfPbh_fchr')</th><th>@lang('dicc.NameOfPbh_fptc')</th><th>@lang('dicc.NameOfPbh_ffce')</th><th>@lang('dicc.NameOfPbl_fhgt')</th><th>@lang('dicc.NameOfPbl_fwgt')</th><th>@lang('dicc.NameOfPbl_fitl')</th><th>@lang('dicc.NameOfPbl_funl')</th><th>@lang('dicc.NameOfPbl_fchr')</th><th>@lang('dicc.NameOfPbl_fptc')</th><th>@lang('dicc.NameOfPbl_ffce')</th><th>@lang('dicc.NameOfPbt_cmnt')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->pbt_tnam }}</td><td>{{ $registro->pbt_tid }}</td><td>{{ $registro->pbt_ownr }}</td><td>{{ $registro->pbd_fhgt }}</td><td>{{ $registro->pbd_fwgt }}</td><td>{{ $registro->pbd_fitl }}</td><td>{{ $registro->pbd_funl }}</td><td>{{ $registro->pbd_fchr }}</td><td>{{ $registro->pbd_fptc }}</td><td>{{ $registro->pbd_ffce }}</td><td>{{ $registro->pbh_fhgt }}</td><td>{{ $registro->pbh_fwgt }}</td><td>{{ $registro->pbh_fitl }}</td><td>{{ $registro->pbh_funl }}</td><td>{{ $registro->pbh_fchr }}</td><td>{{ $registro->pbh_fptc }}</td><td>{{ $registro->pbh_ffce }}</td><td>{{ $registro->pbl_fhgt }}</td><td>{{ $registro->pbl_fwgt }}</td><td>{{ $registro->pbl_fitl }}</td><td>{{ $registro->pbl_funl }}</td><td>{{ $registro->pbl_fchr }}</td><td>{{ $registro->pbl_fptc }}</td><td>{{ $registro->pbl_ffce }}</td><td>{{ $registro->pbt_cmnt }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfPbt_tnam')</th><th>@lang('dicc.NameOfPbt_tid')</th><th>@lang('dicc.NameOfPbt_ownr')</th><th>@lang('dicc.NameOfPbd_fhgt')</th><th>@lang('dicc.NameOfPbd_fwgt')</th><th>@lang('dicc.NameOfPbd_fitl')</th><th>@lang('dicc.NameOfPbd_funl')</th><th>@lang('dicc.NameOfPbd_fchr')</th><th>@lang('dicc.NameOfPbd_fptc')</th><th>@lang('dicc.NameOfPbd_ffce')</th><th>@lang('dicc.NameOfPbh_fhgt')</th><th>@lang('dicc.NameOfPbh_fwgt')</th><th>@lang('dicc.NameOfPbh_fitl')</th><th>@lang('dicc.NameOfPbh_funl')</th><th>@lang('dicc.NameOfPbh_fchr')</th><th>@lang('dicc.NameOfPbh_fptc')</th><th>@lang('dicc.NameOfPbh_ffce')</th><th>@lang('dicc.NameOfPbl_fhgt')</th><th>@lang('dicc.NameOfPbl_fwgt')</th><th>@lang('dicc.NameOfPbl_fitl')</th><th>@lang('dicc.NameOfPbl_funl')</th><th>@lang('dicc.NameOfPbl_fchr')</th><th>@lang('dicc.NameOfPbl_fptc')</th><th>@lang('dicc.NameOfPbl_ffce')</th><th>@lang('dicc.NameOfPbt_cmnt')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
