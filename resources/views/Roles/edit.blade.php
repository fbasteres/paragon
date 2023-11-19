@include('layouts.style')
@extends('layouts.app-master')
@section('content')
    <title>Paragon+ | Editar Rol</title>
    <div class="px-5 container-fluid">
        <div class="pt-4">
            <a href="{{ route ('admin.roles.index') }}" class="href-closed">
                <button class="btn-closed d-flex">
                        <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                        <h6>Roles</h6> 
                </button>        
            </a>
        </div>
        
        <div class="pt-3">
            <h5 class="fw-semibold">Editar información</h5>
        </div>
        
        <div class="col-6 car-inf">
            <form action="{{route ('admin.roles.update', $role->id)}}" method="post">
                @csrf
                @method('PUT')
                <label for="name">Nombre del permiso:</label>
                <input type="text" class="form-control fw-semibold" name="name" value="{{old('name', $role->name)}}" autofocus>
                <h6 class="pt-3">Fecha de creacción: {{$role -> created_at}}</h6>
                <h6>Fecha de actualización: {{$role -> updated_at}}</h6>
                <h6 class="pb-3">Guard: {{$role -> guard_name}}</h6>
            
            <button class="btn btn-outline-secondary px-3" type="submit">Guardar cambios</button>    
            </form>
            
        </div>
        
    </div>
    
        
    
@endsection