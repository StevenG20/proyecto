@extends('layouts.app')

@section('title', 'Creación de Asesor')

@section('title2', 'Nuevo Asesor')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/asesor" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="asesor">Nombre Asesor</label>
						<input type="text" class="form-control" name="nombre_asesor" 
						id="nombre_asesor" aria-describedby="comunalHelp"
						value = {{old('nombre_asesor')}}>
						{!! $errors->first('nombre_asesor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>
                    
                    <div class="form-group">
						<label for="asesor">Apellido Asesor</label>
						<input type="text" class="form-control" name="apellido_asesor" 
						id="apellido_asesor" aria-describedby="comunalHelp"
						value = {{old('apellido_asesor')}}>
						{!! $errors->first('apellido_asesor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

                    <div class="form-group">
						<label for="asesor">Correo Electronico Asesor</label>
						<input type="text" class="form-control" name="correo_asesor" 
						id="correo_asesor" aria-describedby="comunalHelp"
						value = {{old('correo_asesor')}}>
						{!! $errors->first('correo_asesor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

                    <div class="form-group">
						<label for="asesor">Genero Asesor</label>
						<input type="text" class="form-control" name="genero" 
						id="genero" aria-describedby="comunalHelp"
						value = {{old('genero')}}>
						{!! $errors->first('genero', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

					<div class="form-group">
						<label for="local">Local</label>
						<select name='id_local' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($locales as $local)
								<option value = '{{ $local->id_local }}'> {{ $local->descripcion_local }} </option>
							@endforeach
						</select>
						{!! $errors->first('id_local', '<div class="alert alert-danger" role="alert">:message</div>')!!}
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
						<label for="asesor">Telefono Asesor</label>
						<input type="text" class="form-control" name="telefono_asesor" 
						id="telefono_asesor" aria-describedby="comunalHelp"
						value = {{old('telefono_asesor')}}>
						{!! $errors->first('telefono_asesor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

                    <div class="form-group">
						<label for="asesor">Fecha Nacimiento Asesor Asesor</label>
						<input type="date" class="form-control" name="fecha_naci_asesor" 
						id="fecha_naci_asesor" aria-describedby="comunalHelp"
						value = {{old('fecha_naci_asesor')}}>
						{!! $errors->first('fecha_naci_asesor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

                    <div class="form-group">
						<label for="asesor">Tipo Documento Asesor</label>
						<input type="text" class="form-control" name="tipo_docu_asesor" 
						id="tipo_docu_asesor" aria-describedby="comunalHelp"
						value = {{old('tipo_docu_asesor')}}>
						{!! $errors->first('tipo_docu_asesor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/asesor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection

