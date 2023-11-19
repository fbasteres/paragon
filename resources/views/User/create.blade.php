@include('layouts.style')
@extends('layouts.app-master')
@section('content')
    <title>Paragon+ | Crear Usuario</title>
    <div class="px-5 pb-5 container-fluid">
        <div class="pt-4">
            <a href="{{ route ('admin.users.index') }}" class="href-closed">
                <button class="btn-closed d-flex">
                        <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                        <h6>Usuarios</h6> 
                </button>        
            </a>
        </div>
        
        <div class="pt-3">
            <h5 class="fw-semibold">Crear usuario</h5>
        </div>
        
        <div class="car-inf">
            <div class="row">
                <div class="col-3 car-form">
                    <label for="name" class="form-label">Nombres</label>
                    <input type="text" class="form-control" autofocus>
                </div>
                <div class="col-3 car-form">
                    <label for="name" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="col-6 car-form">
                    <label for="email" class="form-label d-flex">Correo &nbsp;<p>(este será su usuario)</p></label>
                    <input type="email" class="form-control">
                </div>
                <div class="col-3 car-form pt-4">
                    <label for="password" class="form-label">DNI</label>
                    <input type="password" class="form-control">
                </div>
                <div class="col-4 car-form pt-4">
                    <label for="password" class="form-label">Celular</label>
                    <input type="password" class="form-control">
                </div>
                <p></p>
                <div class="col-4 car-form pt-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control">
                </div>
                <div class="col-4 car-form pt-4">
                    <label for="password" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control">
                </div>
                <hr class="my-4">
                <div class="col-4 car-form ">
                    <label for="password" class="form-label">Sede</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecione una opción</option>
                        <option value="1">Sede central</option>
                        <option value="2">Centro Civico</option>
                    </select>
                </div>
                <div class="col-5 car-form ">
                    <label for="password" class="form-label">Áreas</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-3 car-form ">
                    <label for="password" class="form-label">Tipo de perfil </label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="pt-5  text-end">
                <button class="btn sp-atendido px-5">Crear usuario</button>
            </div>
        </div>

        
    </div>
    
        
    
@endsection