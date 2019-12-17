
@extends('layouts.app')

@section('title', 'Listado de Marcas')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Marcas')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>            
                <th class="text-center">
                    <a href="/marcas/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nueva Marca">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a> 
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($marcass as $marcas)
                <tr>
                    <td>{{$marcas->id_marcas}}</td>
                    <td>{{$marcas->descripcion_marca}}</td>
                    <td class="text-center">
                        <form method="POST" action="/marcas/{{$marcas->id_marcas}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/marcas/{{$marcas->id_marcas}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $marcass->links()}}
@endsection
