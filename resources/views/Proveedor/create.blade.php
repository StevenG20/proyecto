@extends('layouts.app')

@section('title', 'Creación del Proveedor')

@section('title2', 'Nuevo Proveedor')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/proveedor" accept-charset="UTF-8" style="display:inline">
					@csrf		
					<div class="form-group">
						<label for="proveedor">Nombre Proveedor</label>
						<input type="text" class="form-control" name="nombre_proveedor" 
						id="nombre_proveedor" aria-describedby="comunalHelp"
						value = {{old('nombre_proveedor')}}>
						{!! $errors->first('nombre_proveedor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<div class="form-group">
						<label for="proveedor">Apellido Proveedor</label>
						<input type="text" class="form-control" name="apellido_proveedor" 
						id="apellido_proveedor" aria-describedby="comunalHelp"
						value = {{old('apellido_proveedor')}}>
						{!! $errors->first('apellido_proveedor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="proveedor">Correo Proveedor</label>
						<input type="text" class="form-control" name="correo_proveedor" 
						id="correo_proveedor" aria-describedby="comunalHelp"
						value = {{old('correo_proveedor')}}>
						{!! $errors->first('correo_proveedor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="proveedor">Telefono Proveedor</label>
						<input type="text" class="form-control" name="telefono_proveedor" 
						id="telefono_proveedor" aria-describedby="comunalHelp"
						value = {{old('telefono_proveedor')}}>
						{!! $errors->first('telefono_proveedor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="proveedor">Genero Proveedor</label>
						<input type="text" class="form-control" name="genero_proveedor" 
						id="genero_proveedor" aria-describedby="comunalHelp"
						value = {{old('genero_proveedor')}}>
						{!! $errors->first('genero_proveedor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="proveedor">Tipo Documento del Proveedor</label>
						<input type="text" class="form-control" name="tipo_docu_proveedor" 
						id="tipo_docu_proveedor" aria-describedby="comunalHelp"
						value = {{old('tipo_docu_proveedor')}}>
						{!! $errors->first('tipo_docu_proveedor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/proveedor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection