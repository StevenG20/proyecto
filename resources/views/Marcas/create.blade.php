@extends('layouts.app')

@section('title', 'Creación de Marca')

@section('title2', 'Nueva Marca')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/marcas" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="marcas">Descripcion Marca</label>
						<input type="text" class="form-control" name="descripcion_marca" 
						id="descripcion_marca" aria-describedby="comunalHelp"
						value = {{old('descripcion_marca')}}>
						{!! $errors->first('descripcion_marca', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/marcas" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection

