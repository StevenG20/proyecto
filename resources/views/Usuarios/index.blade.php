
@extends('layouts.app')

@section('title', 'Listado de Usuarios')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Usuarios')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>            
                <th>Apellido</th>
                <th>Tipo de Documento</th>
                <th>Genero</th>
                <th>Rol</th>
                <th>Telefono</th>
                <th>Fecha Creada del Usuario</th>
                <th>Fecha Nacimiento</th>
                
                <th class="text-center">
                    <a href="/usuarios/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nuevo Usuario">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a> 
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($usuarioss as $usuarios)
                <tr>
                    <td>{{$usuarios->id_usuario}}</td>
                    <td>{{$usuarios->nomb_usuario}}</td>
                    <td>{{$usuarios->apellido_usuario}}</td>
                    <td>{{$usuarios->tipo_docu_usuario}}</td>
                    <td>{{$usuarios->genero_usuario}}</td>
                    <td>{{$usuarios->id_rol}}</td>
                    <td>{{$usuarios->telefono_usuario}}</td>
                    <td>{{$usuarios->fecha_crea_usuario}}</td>
                    <td>{{$usuarios->fecha_naci_usuario}}</td>
                    <td class="text-center">
                        <form method="POST" action="/usuarios/{{$usuarios->id_usuario}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/usuarios/{{$usuarios->id_usuario}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $usuarioss->links()}}
@endsection
