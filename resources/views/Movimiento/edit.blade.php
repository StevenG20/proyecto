@extends('layouts.app')

@section('title', 'Actualización del Movimiento')
@section('title2', 'Actualización del Movimiento')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/movimiento/{{$movimiento->id_movimiento}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="id_producto">Producto </label>
							<select name='id_producto' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($productoss as $productos)
									@if($movimiento->id_producto == $productos->id_producto)
										<option selected value = '{{ $productos->id_producto }}'> {{ $productos->desc_producto }} </option>
									@else
										<option value = '{{ $productos->id_producto }}'> {{ $productos->desc_producto }} </option>
									@endif
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="fech_entrada">Fecha Entrada</label>
							<input type="date" value = '{{$movimiento->fech_entrada}}' class="form-control" name="genero"/>
						</div>

						<div class="form-group">
							<label for="asesor_entrada">Asesor Entrada</label>
							<input type="text" value = '{{$movimiento->asesor_entrada}}' class="form-control" name="asesor_entrada"/>
						</div>

						<div class="form-group">
							<label for="local_entrada">Local Entrada</label>
							<input type="text" value = '{{$movimiento->local_entrada}}' class="form-control" name="local_entrada"/>
						</div>

						<div class="form-group">
							<label for="imei">Imei</label>
							<input type="text" value = '{{$movimiento->imei}}' class="form-control" name="imei"/>
						</div>

						<div class="form-group">
							<label for="asesor_salida">Asesor Salida</label>
							<input type="text" value = '{{$movimiento->asesor_salida}}' class="form-control" name="asesor_salida"/>
						</div>

						<div class="form-group">
							<label for="local_salida">Local Salida</label>
							<input type="text" value = '{{$movimiento->local_salida}}' class="form-control" name="local_salida"/>
						</div>

						<div class="form-group">
							<label for="obser_movimi">Observacion</label>
							<input type="text" value = '{{$movimiento->obser_movimi}}' class="form-control" name="obser_movimi"/>
						</div>

						<div class="form-group">
							<label for="id_usuario">Usuario </label>
							<select name='id_usuario' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($usuarioss as $usuarios)
									@if($movimiento->id_usuario == $usuarios->id_usuario)
										<option selected value = '{{ $usuarios->id_usuario }}'> {{ $usuarios->nomb_usuario }} </option>
									@else
										<option value = '{{ $usuarios->id_usuario }}'> {{ $usuarios->nomb_usuario }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="id_proveedor">Proveedor </label>
							<select name='id_proveedor' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($proveedores as $proveedor)
									@if($movimiento->id_proveedor == $proveedor->id_proveedor)
										<option selected value = '{{ $proveedor->id_proveedor }}'> {{ $proveedor->nombre_proveedor }} </option>
									@else
										<option value = '{{ $proveedor->id_proveedor }}'> {{ $proveedor->nombre_proveedor }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="id_asesor">Asesor </label>
							<select name='id_asesor' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($asesores as $asesor)
									@if($movimiento->id_asesor == $asesor->id_asesor)
										<option selected value = '{{ $asesor->id_asesor }}'> {{ $asesor->nombre_asesor }} </option>
									@else
										<option value = '{{ $asesor->id_asesor }}'> {{ $asesor->nombre_asesor }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="id_local">Local </label>
							<select name='id_local' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($locales as $local)
									@if($movimiento->id_local == $local->id_local)
										<option selected value = '{{ $local->id_local }}'> {{ $local->descripcion_local }} </option>
									@else
										<option value = '{{ $local->id_local }}'> {{ $local->descripcion_local }} </option>
									@endif
								@endforeach
							</select>
						</div>
                        
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/movimiento" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
