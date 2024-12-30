@extends('dashboard1')

@section('content-table')

<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
				<h5 class="card-header">
					Lista de Categorias
				</h5>
				<div class="card-body">
                    <embed src="/{{ $archivo }}" type="application/pdf" width="100%" height="500px;" id="reportePDF" toolbar="false"></embed>
				</div>
				<div class="card-footer">
                    <a href="{{  route('categorias.index') }}" class="btn btn-default" >
                    <img src="/bootstrap-icons/icons/list.svg" />
                    <span class="d-none d-xl-inline-block">Ver Lista</span>
                    </a>
				</div>
			</div>
</div>
</div>

@endsection
