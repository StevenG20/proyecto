@extends('layouts.app')

@section('title', 'Actualización del Local')
@section('title2', 'Actualización del Local')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/local/{{$local->id_local}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="descripcion_local">Descripcion Local</label>
							<input type="text" value = '{{$local->descripcion_local}}' class="form-control" name="descripcion_local"/>
						</div>				
						<div class="form-group">
							<label for="id_producto">Producto </label>
							<select name='id_producto' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($productoss as $productos)
									@if($local->id_producto == $productos->id_producto)
										<option selected value = '{{ $productos->id_producto }}'> {{ $productos->desc_producto }} </option>
									@else
										<option value = '{{ $productos->id_producto }}'> {{ $productos->desc_producto }} </option>
									@endif
								@endforeach
							</select>       
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/local" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
