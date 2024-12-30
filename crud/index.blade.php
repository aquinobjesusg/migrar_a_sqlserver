@extends('dashboard1')

@section('content-table')

$$DBGET$$

<div class="card">
				<h5 class="card-header">
                $$TITULO$$
				</h5>
				<div class="card-body">

<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            $$ACTION@CREATE$$
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
            $$ENCABEZADO$$
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
            $$CAMPOS$$
              <td>
                <div class="btn-group me-2">
                            $$ACTION@VER$$
                            $$ACTION@MODIFICAR$$
                            $$ACTION@ELIMINAR$$
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          </div>
        </div>
@endsection

