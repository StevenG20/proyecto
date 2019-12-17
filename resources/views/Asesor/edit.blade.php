@extends('layouts.app')

@section('title', 'Actualización del Asesor')
@section('title2', 'Actualización del Asesor')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/asesor/{{$asesor->id_asesor}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="nombre_asesor">Nombre Asesor</label>
							<input type="text" value = '{{$asesor->nombre_asesor}}' class="form-control" name="nombre_asesor"/>
                        </div>
                        
                        <div class="form-group">
							<label for="apellido_asesor">Apellido Asesor</label>
							<input type="text" value = '{{$asesor->apellido_asesor}}' class="form-control" name="apellido_asesor"/>
                        </div>
                        
                        <div class="form-group">
							<label for="correo_asesor">Correo Electronico Asesor</label>
							<input type="text" value = '{{$asesor->correo_asesor}}' class="form-control" name="correo_asesor"/>
                        </div>
                        
                        <div class="form-group">
							<label for="genero">Genero Asesor</label>
							<input type="text" value = '{{$asesor->genero}}' class="form-control" name="genero"/>
						</div>
						
						<div class="form-group">
							<label for="id_local">Local </label>
							<select name='id_local' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($locales as $local)
									@if($asesor->id_local == $local->id_local)
										<option selected value = '{{ $local->id_local }}'> {{ $local->descripcion_local }} </option>
									@else
										<option value = '{{ $local->id_local }}'> {{ $local->descripcion_local }} </option>
									@endif
								@endforeach
							</select>
                        </div>
                        
                        <div class="form-group">
							<label for="id_rol">Rol </label>
							<select name='id_rol' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($roles as $rol)
									@if($asesor->id_rol == $rol->id_rol)
										<option selected value = '{{ $rol->id_rol }}'> {{ $rol->nom_rol_usuario }} </option>
									@else
										<option value = '{{ $rol->id_rol }}'> {{ $rol->nom_rol_usuario  }} </option>
									@endif
								@endforeach
							</select>
                        </div>

                        <div class="form-group">
							<label for="telefono_asesor">Telefono Asesor</label>
							<input type="text" value = '{{$asesor->telefono_asesor}}' class="form-control" name="telefono_asesor"/>
                        </div>
                        
                        <div class="form-group">
							<label for="fecha_naci_asesor">Fecha Nacimiento Asesor</label>
							<input type="date" value = '{{$asesor->fecha_naci_asesor}}' class="form-control" name="fecha_naci_asesor"/>
                        </div>
                        
                        <div class="form-group">
							<label for="tipo_docu_asesor">Tipo Documento Asesor</label>
							<input type="text" value = '{{$asesor->tipo_docu_asesor}}' class="form-control" name="tipo_docu_asesor"/>
						</div>
                        
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/asesor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
