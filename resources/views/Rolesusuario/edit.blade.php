@extends('layouts.app')

@section('title', 'Actualización de Roles de Usuario')
@section('title2', 'Actualización de Roles de Usuario')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/rolesusuario/{{$rolesusuario->id_roles_usuarios}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
                        
                        <div class="form-group">
							<label for="id_rol">Rol </label>
							<select name='id_rol' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($roles as $rol)
									@if($rolesusuario->id_rol == $rol->id_rol)
										<option selected value = '{{ $rol->id_rol }}'> {{ $rol->nom_rol_usuario }} </option>
									@else
										<option value = '{{ $rol->id_rol }}'> {{ $rol->nom_rol_usuario  }} </option>
									@endif
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="id_usuario">Usuario </label>
							<select name='id_usuario' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($usuarioss as $usuarios)
									@if($rolesusuario->id_usuario == $usuarios->id_usuario)
										<option selected value = '{{ $usuarios->id_usuario }}'> {{ $usuarios->nomb_usuario }} </option>
									@else
										<option value = '{{ $usuarios->id_usuario }}'> {{ $usuarios->nomb_usuario }} </option>
									@endif
								@endforeach
							</select>
						</div>
                        
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/rolesusuario" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
