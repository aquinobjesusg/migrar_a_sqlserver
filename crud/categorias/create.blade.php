@extends('dashboard1')
@section('content-table')

<div class="card">
				<h5 class="card-header">
					Crear Categorìa
				</h5>
				<div class="card-body">
					<p class="card-text">
					<form method="POST" action="{{ route('categorias.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                Guardar
                                </button>

								        <a href="{{ route('roles.index') }}" class="btn btn-default" >
        <img src="/bootstrap-icons/icons/list.svg" />
         <span class="d-none d-xl-inline-block">Ver Lista</span>
         </a>


                            </div>
                        </div>
                    </form>

					</p>
				</div>
				<div class="card-footer">

				</div>
			</div>

@endsection
