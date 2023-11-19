@include('layouts.style')
@extends('layouts.app-master')
@section('content')
    <title>Paragon+ | Permisos Detalles</title>
    <div class="px-5 container-fluid">
        <div class="pt-4">
            <a href="{{ route ('admin.permissions.index') }}" class="href-closed">
                <button class="btn-closed d-flex">
                        <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                        <h6>Permisos</h6> 
                </button>        
            </a>
        </div>
        
        
        <div class="pt-3">
            <h5 class="fw-semibold">Información</h5>
        </div>
        
        <div class="col-6 car-inf">
            <h4 class="fw-semibold">{{$permission->name}}</h4>
            <h6 class="pt-3">Fecha de creacción: {{$permission -> created_at}}</h6>
            <h6>Fecha de actualización: {{$permission -> updated_at}}</h6>
            <h6 class="pb-3">Guard: {{$permission -> guard_name}}</h6>
            
            <a href="{{route ('admin.permissions.edit', $permission -> id )}}">
                <button class="btn btn-outline-secondary px-3" type="button">Editar</button>
            </a> 
        </div>
        
    </div>
    
        
    
@endsection