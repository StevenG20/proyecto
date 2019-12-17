
@extends('layouts.app')

@section('title', 'Listado de Asesores')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

@section('title2', 'Listado de Asesores')

@section('content')
	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>            
                <th>Apellido</th>
                <th>Correo</th>
                <th>Genero</th>
                <th>Local</th>
                <th>Rol</th>
                <th>Telefono</th>
                <th>Fecha Nacimiento</th>
                <th>Tipo de Documento</th>
                <th class="text-center">
                    @can('isAdmin')
                    <a href="/asesor/create" class="btn btn-primary btn-sm" id="nuevo"  
                        data-toggle="tooltip" title="Nuevo Asesor">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nueva
                    </a>
                    @endcan
                </th>
            </tr>
        </thead>
        <tbody>
            @include('common.success')

            @foreach($asesores as $asesor)
                <tr>
                    <td>{{$asesor->id_asesor}}</td>
                    <td>{{$asesor->nombre_asesor}}</td>
                    <td>{{$asesor->apellido_asesor}}</td>
                    <td>{{$asesor->correo_asesor}}</td>
                    <td>{{$asesor->genero}}</td>
                    <td>{{$asesor->descripcion_local}}</td>
                    <td>{{$asesor->nom_rol_usuario}}</td>
                    <td>{{$asesor->telefono_asesor}}</td>
                    <td>{{$asesor->fecha_naci_asesor}}</td>
                    <td>{{$asesor->tipo_docu_asesor}}</td>
                    <td class="text-center">
                        @can('isAdmin')
                        <form method="POST" action="/asesor/{{$asesor->id_asesor}}" accept-charset="UTF-8" 
                            style="display:inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">					
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px">	</button>				
                        </form>
                        <a href="/asesor/{{$asesor->id_asesor}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $asesores->links()}}
@endsection
