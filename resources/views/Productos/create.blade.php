@extends('layouts.app')

@section('title', 'Creación del Producto')

@section('title2', 'Nuevo Producto')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/productos" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="productos">Descripcion Producto</label>
						<input type="text" class="form-control" name="desc_producto" 
						id="desc_producto" aria-describedby="comunalHelp"
						value = {{old('desc_producto')}}>
						{!! $errors->first('desc_producto', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<div class="form-group">
						<label for="marcas">Marcas</label>
						<select name='id_marcas' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($marcass as $marcas)
								<option value = '{{ $marcas->id_marcas }}'> {{ $marcas->descripcion_marca }} </option>
								@endforeach
							</select>
							{!! $errors->first('id_marcas', '<div class="alert alert-danger" role="alert">:message</div>')!!}
						</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/productos" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection