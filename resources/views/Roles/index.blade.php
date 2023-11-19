@include('layouts.style')
@extends('layouts.app-master')
@section('content')
    <title>Paragon+ | Roles</title>
    <div class="container-fluid">
    <div class=" pt-4">
        <!-- Button trigger modal -->
        <div class="text-end pb-4">
            <button type="button" class="btn btn-paragon-primary-lite " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-cube"></i> &nbsp;Crear nuevo rol
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{route ('admin.roles.store')}}" method="post">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                        <h6 class="modal-title fw-semibold " id="exampleModalLabel">Ingresar datos</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <label class="col-form-label" for="name">Nombre del rol:</label>
                        <input class="form-control" type="text" name="name" >
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>

        <div class="card p-3">
            @include ('layouts.partials.messages')
        <table id="tabla_usuario" class="table table" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Guard</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{$role -> id}}</td>
                    <td>{{$role -> name }}</td>
                    <td>{{$role -> guard_name }}</td>
                    <td>{{$role -> created_at }}</td>
                    <td>
                        <a href="{{route ('admin.roles.show', $role -> id )}}" class="btn btn-acciones">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{route ('admin.roles.edit', $role -> id )}}" class="btn btn-acciones">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <form action="{{route ('admin.roles.destroy', $role -> id )}}" method="POST"
                            style="display:inline-block;" onsubmit="return confirm('Seguro?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-acciones"  type="submit" rel="tooltip">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Guard</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
        </table>
    </div> 
    </div>
    
    @include ('layouts.partials.datatable')
@endsection