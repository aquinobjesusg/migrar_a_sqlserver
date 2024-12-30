<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Pbcatcol')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfPbc_tnam')</th><th>@lang('dicc.NameOfPbc_tid')</th><th>@lang('dicc.NameOfPbc_ownr')</th><th>@lang('dicc.NameOfPbc_cnam')</th><th>@lang('dicc.NameOfPbc_cid')</th><th>@lang('dicc.NameOfPbc_labl')</th><th>@lang('dicc.NameOfPbc_lpos')</th><th>@lang('dicc.NameOfPbc_hdr')</th><th>@lang('dicc.NameOfPbc_hpos')</th><th>@lang('dicc.NameOfPbc_jtfy')</th><th>@lang('dicc.NameOfPbc_mask')</th><th>@lang('dicc.NameOfPbc_case')</th><th>@lang('dicc.NameOfPbc_hght')</th><th>@lang('dicc.NameOfPbc_wdth')</th><th>@lang('dicc.NameOfPbc_ptrn')</th><th>@lang('dicc.NameOfPbc_bmap')</th><th>@lang('dicc.NameOfPbc_init')</th><th>@lang('dicc.NameOfPbc_cmnt')</th><th>@lang('dicc.NameOfPbc_edit')</th><th>@lang('dicc.NameOfPbc_tag')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->pbc_tnam }}</td><td>{{ $registro->pbc_tid }}</td><td>{{ $registro->pbc_ownr }}</td><td>{{ $registro->pbc_cnam }}</td><td>{{ $registro->pbc_cid }}</td><td>{{ $registro->pbc_labl }}</td><td>{{ $registro->pbc_lpos }}</td><td>{{ $registro->pbc_hdr }}</td><td>{{ $registro->pbc_hpos }}</td><td>{{ $registro->pbc_jtfy }}</td><td>{{ $registro->pbc_mask }}</td><td>{{ $registro->pbc_case }}</td><td>{{ $registro->pbc_hght }}</td><td>{{ $registro->pbc_wdth }}</td><td>{{ $registro->pbc_ptrn }}</td><td>{{ $registro->pbc_bmap }}</td><td>{{ $registro->pbc_init }}</td><td>{{ $registro->pbc_cmnt }}</td><td>{{ $registro->pbc_edit }}</td><td>{{ $registro->pbc_tag }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfPbc_tnam')</th><th>@lang('dicc.NameOfPbc_tid')</th><th>@lang('dicc.NameOfPbc_ownr')</th><th>@lang('dicc.NameOfPbc_cnam')</th><th>@lang('dicc.NameOfPbc_cid')</th><th>@lang('dicc.NameOfPbc_labl')</th><th>@lang('dicc.NameOfPbc_lpos')</th><th>@lang('dicc.NameOfPbc_hdr')</th><th>@lang('dicc.NameOfPbc_hpos')</th><th>@lang('dicc.NameOfPbc_jtfy')</th><th>@lang('dicc.NameOfPbc_mask')</th><th>@lang('dicc.NameOfPbc_case')</th><th>@lang('dicc.NameOfPbc_hght')</th><th>@lang('dicc.NameOfPbc_wdth')</th><th>@lang('dicc.NameOfPbc_ptrn')</th><th>@lang('dicc.NameOfPbc_bmap')</th><th>@lang('dicc.NameOfPbc_init')</th><th>@lang('dicc.NameOfPbc_cmnt')</th><th>@lang('dicc.NameOfPbc_edit')</th><th>@lang('dicc.NameOfPbc_tag')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
