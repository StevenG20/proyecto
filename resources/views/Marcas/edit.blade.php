@extends('layouts.app')

@section('title', 'Actualización de Marca')
@section('title2', 'Actualización de Marca')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/marcas/{{$marcas->id_marcas}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="descripcion_marca">Descripcion Marca</label>
							<input type="text" value = '{{$marcas->descripcion_marca}}' class="form-control" name="descripcion_marca"/>
                        </div>
                        
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/marcas" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
