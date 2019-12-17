@extends('layouts.app')

@section('title', 'Actualización del Usuario')
@section('title2', 'Actualización del Usuario')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/usuarios/{{$usuarios->id_usuario}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="nomb_usuario">Nombre Usuario</label>
							<input type="text" value = '{{$usuarios->nomb_usuario}}' class="form-control" name="nomb_usuario"/>
						</div>
						
						<div class="form-group">
							<label for="apellido_usuario">Apellido Usuario</label>
							<input type="text" value = '{{$usuarios->apellido_usuario}}' class="form-control" name="apellido_usuario"/>
						</div>

						<div class="form-group">
							<label for="tipo_docu_usuario">Tipo Documento del Usuario</label>
							<input type="text" value = '{{$usuarios->tipo_docu_usuario}}' class="form-control" name="tipo_docu_usuario"/>
						</div>

						<div class="form-group">
							<label for="genero_usuario">Genero del Usuario</label>
							<input type="text" value = '{{$usuarios->genero_usuario}}' class="form-control" name="genero_usuario"/>
						</div>
                        
                        <div class="form-group">
							<label for="id_rol">Rol </label>
							<select name='id_rol' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($roles as $rol)
									@if($usuarios->id_rol == $rol->id_rol)
										<option selected value = '{{ $rol->id_rol }}'> {{ $rol->nom_rol_usuario }} </option>
									@else
										<option value = '{{ $rol->id_rol }}'> {{ $rol->nom_rol_usuario  }} </option>
									@endif
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="telefono_usuario">Telefono del Usuario</label>
							<input type="text" value = '{{$usuarios->telefono_usuario}}' class="form-control" name="telefono_usuario"/>
						</div>

						<div class="form-group">
							<label for="fecha_crea_usuario">Fecha Creada del Usuario</label>
							<input type="date" value = '{{$usuarios->fecha_crea_usuario}}' class="form-control" name="fecha_crea_usuario"/>
						</div>

						<div class="form-group">
							<label for="fecha_naci_usuario">Fecha Nacimiento del Usuario</label>
							<input type="date" value = '{{$usuarios->fecha_naci_usuario}}' class="form-control" name="fecha_naci_usuario"/>
						</div>
                        
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/usuarios" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
