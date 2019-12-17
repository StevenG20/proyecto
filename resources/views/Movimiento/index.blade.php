
@extends('layouts.app')

@section('title', 'Listado de Movimiento')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Movimiento')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Producto</th>            
                <th>Fecha Entrada</th>
                <th>Asesor Entrada</th>
                <th>Local Entrada</th>
                <th>Imei</th>
                <th>Asesor Salida</th>
                <th>Local Salida</th>
                <th>Observacion</th>
                <th>Usuario</th>
                <th>Proveedor</th>
                <th>Asesor</th>
                <th>Local</th>
                <th class="text-center">
                    <a href="/movimiento/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nuevo Movimiento">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a> 
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($movimientos as $movimiento)
                <tr>
                    <td>{{$movimiento->id_movimiento}}</td>
                    <td>{{$movimiento->id_producto}}</td>
                    <td>{{$movimiento->fech_entrada}}</td>
                    <td>{{$movimiento->asesor_entrada}}</td>
                    <td>{{$movimiento->local_entrada}}</td>
                    <td>{{$movimiento->imei}}</td>
                    <td>{{$movimiento->asesor_salida}}</td>
                    <td>{{$movimiento->local_salida}}</td>
                    <td>{{$movimiento->obser_movimi}}</td>
                    <td>{{$movimiento->nomb_usuario}}</td>
                    <td>{{$movimiento->nombre_proveedor}}</td>
                    <td>{{$movimiento->nombre_asesor}}</td>
                    <td>{{$movimiento->descripcion_local}}</td>
                    <td class="text-center">
                        <form method="POST" action="/movimiento/{{$movimiento->id_movimiento}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/movimiento/{{$movimiento->id_movimiento}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $movimientos->links()}}
@endsection
