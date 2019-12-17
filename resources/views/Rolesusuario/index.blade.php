
@extends('layouts.app')

@section('title', 'Listado de Roles de Usuario')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Roles de Usuario')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Rol</th>            
                <th>Usuario</th>
                <th class="text-center">
                    @can('isAdmin')
                    <a href="/rolesusuario/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nuevo Rol de Usuario">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a>
                    @endcan
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($rolesusuarioss as $rolesusuario)
                <tr>
                    <td>{{$rolesusuario->id_roles_usuarios}}</td>
                    <td>{{$rolesusuario->nom_rol_usuario}}</td>
                    <td>{{$rolesusuario->nomb_usuario}}</td>
                    <td class="text-center">
                        @can('isAdmin')
                        <form method="POST" action="/rolesusuario/{{$rolesusuario->id_roles_usuarios}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/rolesusuario/{{$rolesusuario->id_roles_usuarios}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                        @endcan 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $rolesusuarioss->links()}}
@endsection
