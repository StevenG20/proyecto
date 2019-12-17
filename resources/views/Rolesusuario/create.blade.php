@extends('layouts.app')

@section('title', 'Creación del Roles de Usuario')

@section('title2', 'Nuevo Roles de Usuario')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/rolesusuario" accept-charset="UTF-8" style="display:inline">
					@csrf			

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
						<label for="usuarios">Usuarios</label>
						<select name='id_usuario' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($usuarioss as $usuarios)
								<option value = '{{ $usuarios->id_usuario }}'> {{ $usuarios->nomb_usuario }} </option>
							@endforeach
						</select>
						{!! $errors->first('id_usuario', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/rolesusuario" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection

