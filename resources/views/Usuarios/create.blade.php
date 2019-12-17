@extends('layouts.app')

@section('title', 'Creación del Usuario')

@section('title2', 'Nuevo Usuario')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/usuarios" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="usuarios">Nombre Usuario</label>
						<input type="text" class="form-control" name="nomb_usuario" 
						id="nomb_usuario" aria-describedby="comunalHelp"
						value = {{old('nomb_usuario')}}>
						{!! $errors->first('nomb_usuario', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<div class="form-group">
						<label for="usuarios">Apellido Usuario</label>
						<input type="text" class="form-control" name="apellido_usuario" 
						id="apellido_usuario" aria-describedby="comunalHelp"
						value = {{old('apellido_usuario')}}>
						{!! $errors->first('apellido_usuario', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="usuarios">Tipo Documento del Usuario</label>
						<input type="text" class="form-control" name="tipo_docu_usuario" 
						id="tipo_docu_usuario" aria-describedby="comunalHelp"
						value = {{old('tipo_docu_usuario')}}>
						{!! $errors->first('tipo_docu_usuario', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="usuarios">Genero Usuario</label>
						<input type="text" class="form-control" name="genero_usuario" 
						id="genero_usuario" aria-describedby="comunalHelp"
						value = {{old('genero_usuario')}}>
						{!! $errors->first('genero_usuario', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="rol">Rol</label>
						<select name='id_rol' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($roles as $rol)
								<option value = '{{ $rol->id_rol }}'> {{ $rol->nom_rol_usuario }} </option>
							@endforeach
						</select>
						{!! $errors->first('id_rol', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="usuarios">Telefono Usuario</label>
						<input type="text" class="form-control" name="telefono_usuario" 
						id="telefono_usuario" aria-describedby="comunalHelp"
						value = {{old('telefono_usuario')}}>
						{!! $errors->first('telefono_usuario', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="usuarios">Fecha creada del Usuario</label>
						<input type="date" class="form-control" name="fecha_crea_usuario" 
						id="fecha_crea_usuario" aria-describedby="comunalHelp"
						value = {{old('fecha_crea_usuario')}}>
						{!! $errors->first('fecha_crea_usuario', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="usuarios">Fecha Nacimiento del Usuario</label>
						<input type="date" class="form-control" name="fecha_naci_usuario" 
						id="fecha_naci_usuario" aria-describedby="comunalHelp"
						value = {{old('fecha_naci_usuario')}}>
						{!! $errors->first('fecha_naci_usuario', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/usuarios" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection

