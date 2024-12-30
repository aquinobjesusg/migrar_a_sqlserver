<div>

<div class="card">
    <h5 class="card-header">
@lang('dicc.Employee')

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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfEmp_id')</th><th>@lang('dicc.NameOfManager_id')</th><th>@lang('dicc.NameOfEmp_fname')</th><th>@lang('dicc.NameOfEmp_lname')</th><th>@lang('dicc.NameOfDept_id')</th><th>@lang('dicc.NameOfStreet')</th><th>@lang('dicc.NameOfCity')</th><th>@lang('dicc.NameOfState')</th><th>@lang('dicc.NameOfZip_code')</th><th>@lang('dicc.NameOfPhone')</th><th>@lang('dicc.NameOfStatus')</th><th>@lang('dicc.NameOfSs_number')</th><th>@lang('dicc.NameOfSalary')</th><th>@lang('dicc.NameOfStart_date')</th><th>@lang('dicc.NameOfTermination_date')</th><th>@lang('dicc.NameOfBirth_date')</th><th>@lang('dicc.NameOfBene_health_ins')</th><th>@lang('dicc.NameOfBene_life_ins')</th><th>@lang('dicc.NameOfBene_day_care')</th><th>@lang('dicc.NameOfSex')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
<td>{{ $registro->id }}</td><td>{{ $registro->emp_id }}</td><td>{{ $registro->manager_id }}</td><td>{{ $registro->emp_fname }}</td><td>{{ $registro->emp_lname }}</td><td>{{ $registro->dept_id }}</td><td>{{ $registro->street }}</td><td>{{ $registro->city }}</td><td>{{ $registro->state }}</td><td>{{ $registro->zip_code }}</td><td>{{ $registro->phone }}</td><td>{{ $registro->status }}</td><td>{{ $registro->ss_number }}</td><td>{{ $registro->salary }}</td><td>{{ $registro->start_date }}</td><td>{{ $registro->termination_date }}</td><td>{{ $registro->birth_date }}</td><td>{{ $registro->bene_health_ins }}</td><td>{{ $registro->bene_life_ins }}</td><td>{{ $registro->bene_day_care }}</td><td>{{ $registro->sex }}</td>
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
<tr><th>@lang('dicc.NameOfId')</th><th>@lang('dicc.NameOfEmp_id')</th><th>@lang('dicc.NameOfManager_id')</th><th>@lang('dicc.NameOfEmp_fname')</th><th>@lang('dicc.NameOfEmp_lname')</th><th>@lang('dicc.NameOfDept_id')</th><th>@lang('dicc.NameOfStreet')</th><th>@lang('dicc.NameOfCity')</th><th>@lang('dicc.NameOfState')</th><th>@lang('dicc.NameOfZip_code')</th><th>@lang('dicc.NameOfPhone')</th><th>@lang('dicc.NameOfStatus')</th><th>@lang('dicc.NameOfSs_number')</th><th>@lang('dicc.NameOfSalary')</th><th>@lang('dicc.NameOfStart_date')</th><th>@lang('dicc.NameOfTermination_date')</th><th>@lang('dicc.NameOfBirth_date')</th><th>@lang('dicc.NameOfBene_health_ins')</th><th>@lang('dicc.NameOfBene_life_ins')</th><th>@lang('dicc.NameOfBene_day_care')</th><th>@lang('dicc.NameOfSex')</th><th>@lang('dicc.Opciones')</th><th></th></tr>
        </tfoot>
    </table>


    </div>
    <div class="card-footer">
        
    </div>
</div>


</div>
