@extends('layouts.app')

@section('title', 'Actualización del Proveedor')
@section('title2', 'Actualización del Proveedor')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/proveedor/{{$proveedor->id_proveedor}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="nombre_proveedor">Nombre Proovedor</label>
							<input type="text" value = '{{$proveedor->nombre_proveedor}}' class="form-control" name="nombre_proveedor"/>
                        </div>
                        
                        <div class="form-group">
							<label for="apellido_proveedor">Apellido Proveedor</label>
							<input type="text" value = '{{$proveedor->apellido_proveedor}}' class="form-control" name="apellido_proveedor"/>
                        </div>
                        
                        <div class="form-group">
							<label for="correo_proveedor">Correo Proveedor</label>
							<input type="text" value = '{{$proveedor->correo_proveedor}}' class="form-control" name="correo_proveedor"/>
                        </div>
                        
                        <div class="form-group">
							<label for="telefono_proveedor">Telefono Proveedor</label>
							<input type="text" value = '{{$proveedor->telefono_proveedor}}' class="form-control" name="telefono_proveedor"/>
						</div>

						<div class="form-group">
							<label for="genero_proveedor">Genero Proveedor</label>
							<input type="text" value = '{{$proveedor->genero_proveedor}}' class="form-control" name="genero_proveedor"/>
						</div>

						<div class="form-group">
							<label for="tipo_docu_proveedor">Tipo Documento del Proveedor</label>
							<input type="text" value = '{{$proveedor->tipo_docu_proveedor}}' class="form-control" name="tipo_docu_proveedor"/>
						</div>
                        
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/proveedor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
