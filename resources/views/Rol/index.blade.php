
@extends('layouts.app')

@section('title', 'Listado de Roles')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Roles')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>            
                <th class="text-center">
                    @can('isAdmin')
                    <a href="/rol/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nuevo Rol">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a>
                    @endcan
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($roles  as $rol)
                <tr>
                    <td>{{$rol->id_rol}}</td>
                    <td>{{$rol->nom_rol_usuario}}</td>
                    <td class="text-center">
                        @can('isAdmin')
                        <form method="POST" action="/rol/{{$rol->id_rol}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/rol/{{$rol->id_rol}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $roles->links()}}
@endsection
