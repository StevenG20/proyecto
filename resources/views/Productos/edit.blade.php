@extends('layouts.app')

@section('title', 'Actualización del Producto')
@section('title2', 'Actualización del Producto')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/productos/{{$productos->id_producto}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="desc_producto">Descripcion Producto</label>
							<input type="text" value = '{{$productos->desc_producto}}' class="form-control" name="desc_producto"/>
						</div>
						<div class="form-group">
							<label for="id_marcas">Producto </label>
							<select name='id_marcas' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($marcass as $marcas)
									@if($productos->id_marcas == $marcas->id_marcas)
										<option selected value = '{{ $marcas->id_marcas }}'> {{ $marcas->descripcion_marca }} </option>
									@else
										<option value = '{{ $marcas->id_marcas }}'> {{ $marcas->descripcion_marca }} </option>
									@endif
								@endforeach
							</select>    
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/productos" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
