@include('layouts.style')
@extends('layouts.app-master')
@section('content')
    <title>Paragon+ | Usuarios</title>
    <div class="container-fluid">
    <div class=" pt-4">
        <!-- Button trigger modal -->
        <div class="text-end pb-4">
            <a href="{{route ('admin.users.create')}}">
                <button type="button" class="btn btn-paragon-primary-lite " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-user-plus"></i> &nbsp;Crear nuevo usuario
                </button>
            </a>
            
        </div>
    
    <div class="card p-3">
        <table id="tabla_usuario" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Fecha de Creación</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarix as $user)
                <tr>
                    <td>{{$user -> id}}</td>
                    
                    
                    <td>
                        {{$user->area->name ?? 'Área no asignada'}}
                    </td>
                  
                   
                    <td>{{$user -> email}}</td>
                    <td>{{$user -> created_at}}</td>
                    <td>
                        <?php
                        switch ($user -> role) {
                            case "Administrador":
                                echo '<span class="badge sp-nuevo">Administrador</span>';
                                break;
                            case "Colaborador":
                                echo '<span class="badge sp-atendido">Colaborador</span>';
                                break;
                            case "Coordinador":
                                echo '<span class="badge sp-proceso">Coordinador</span>';
                                break;
                        }
                        ?>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Fecha de Creación</th>
                    <th>Rol</th>
                </tr>
            </tfoot>
        </table>
    </div>
    </div>
    
    @include ('layouts.partials.datatable')
@endsection