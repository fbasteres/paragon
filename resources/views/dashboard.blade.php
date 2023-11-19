@include('layouts.style')
@extends('layouts.app-master')
@section('content')
    <title>Paragon+ | Dashboard</title>
    <div class="p-3 container-xxl">
        <h5>Hoy, {{date('d')}} {{date('M')}} de {{date('Y')}}</h5>
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a onclick="" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection



