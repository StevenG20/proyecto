@extends('layouts.app')

@section('title', 'Creación del Movimiento')

@section('title2', 'Nuevo Movimiento')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/movimiento" accept-charset="UTF-8" style="display:inline">
					@csrf
					
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

                    <div class="form-group">
						<label for="movimiento">Fecha Entrada</label>
						<input type="date" class="form-control" name="fech_entrada" 
						id="fech_entrada" aria-describedby="comunalHelp"
						value = {{old('fech_entrada')}}>
						{!! $errors->first('fech_entrada', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>
                    
                    <div class="form-group">
						<label for="movimiento">Asesor Entrada</label>
						<input type="text" class="form-control" name="asesor_entrada" 
						id="asesor_entrada" aria-describedby="comunalHelp"
						value = {{old('asesor_entrada')}}>
						{!! $errors->first('asesor_entrada', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

                    <div class="form-group">
						<label for="movimiento">Local Entrada</label>
						<input type="text" class="form-control" name="local_entrada" 
						id="local_entrada" aria-describedby="comunalHelp"
						value = {{old('local_entrada')}}>
						{!! $errors->first('local_entrada', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

                    <div class="form-group">
						<label for="movimiento">Imei</label>
						<input type="text" class="form-control" name="imei" 
						id="imei" aria-describedby="comunalHelp"
						value = {{old('imei')}}>
						{!! $errors->first('imei', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<div class="form-group">
						<label for="movimiento">Asesor Salida</label>
						<input type="text" class="form-control" name="asesor_salida" 
						id="asesor_salida" aria-describedby="comunalHelp"
						value = {{old('asesor_salida')}}>
						{!! $errors->first('asesor_salida', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<div class="form-group">
						<label for="movimiento">Local Salida</label>
						<input type="text" class="form-control" name="local_salida" 
						id="local_salida" aria-describedby="comunalHelp"
						value = {{old('local_salida')}}>
						{!! $errors->first('local_salida', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>
					
					<div class="form-group">
						<label for="movimiento">Observacion</label>
						<input type="text" class="form-control" name="obser_movimi" 
						id="obser_movimi" aria-describedby="comunalHelp"
						value = {{old('obser_movimi')}}>
						{!! $errors->first('obser_movimi', '<div class="alert alert-danger" role="alert">:message</div>')!!}
                    </div>

                    <div class="form-group">
						<label for="usuarios">Usuarios</label>
						<select name='id_usuario' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($usuarioss as $usuarios)
								<option value = '{{ $usuarios->id_usuario }}'> {{ $usuarios->nomb_usuario }} </option>
							@endforeach
						</select>
						{!! $errors->first('id_usuario', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="proveedor">Proveedor</label>
						<select name='id_proveedor' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($proveedores as $proveedor)
								<option value = '{{ $proveedor->id_proveedor }}'> {{ $proveedor->nombre_proveedor }} </option>
							@endforeach
						</select>
						{!! $errors->first('id_proveedor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="asesor">Asesor</label>
						<select name='id_asesor' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($asesores as $asesor)
								<option value = '{{ $asesor->id_asesor }}'> {{ $asesor->nombre_asesor }} </option>
							@endforeach
						</select>
						{!! $errors->first('id_asesor', '<div class="alert alert-danger" role="alert">:message</div>')!!}
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
					
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/movimiento" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection

