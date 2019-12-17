@extends('layouts.app')

@section('title', 'Creación de Roles')

@section('title2', 'Nuevo Rol')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/rol" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="rol">Roles</label>
						<input type="text" class="form-control" name="nom_rol_usuario" 
						id="nom_rol_usuario" aria-describedby="comunalHelp"
						value = {{old('nom_rol_usuario')}}>
						{!! $errors->first('nom_rol_usuario', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/rol" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection

