@extends('layouts.app')

@section('title', 'Creación del Local')

@section('title2', 'Nuevo Local')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/local" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="local">Descripcion Local</label>
						<input type="text" class="form-control" name="descripcion_local" 
						id="descripcion_local" aria-describedby="comunalHelp"
						value = {{old('descripcion_local')}}>
						{!! $errors->first('descripcion_local', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<div class="form-group">
						<label for="productos">Producto</label>
						<select name='id_producto' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($productoss as $productos)
								<option value = '{{ $productos->id_producto }}'> {{ $productos->desc_producto }} </option>
							@endforeach
						</select>
						{!! $errors->first('id_producto', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/local" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection

