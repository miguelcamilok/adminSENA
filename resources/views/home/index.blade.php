@extends('layouts.app')

@section('title', 'Inicio - ADMIN SENA')

@section('content')
<div class="container py-5">
    <div class="row g-5 justify-content-center">

        <!-- Tarjeta Áreas -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-lg rounded-4 bg-light hover-card">
                <div class="card-body text-center">
                    <i class="bi bi-grid-fill display-4 text-success mb-3"></i>
                    <h5 class="card-title fw-bold">Áreas</h5>
                    <p class="card-text">Listado de áreas con sus profesores y cursos asignados.</p>
                    <a href="{{ route('area.index') }}" class="btn btn-success w-100">Ver Áreas</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Profesores -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-lg rounded-4 bg-light hover-card">
                <div class="card-body text-center">
                    <i class="bi bi-person-badge-fill display-4 text-primary mb-3"></i>
                    <h5 class="card-title fw-bold">Profesores</h5>
                    <p class="card-text">Consulta los profesores registrados y sus asignaciones.</p>
                    <a href="{{ route('teacher.index') }}" class="btn btn-primary w-100">Ver Profesores</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Centros -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-lg rounded-4 bg-light hover-card">
                <div class="card-body text-center">
                    <i class="bi bi-building display-4 text-danger mb-3"></i>
                    <h5 class="card-title fw-bold">Centros de Formación</h5>
                    <p class="card-text">Consulta los centros de formación con cursos y profesores asociados.</p>
                    <a href="{{ route('trainingcenter.index') }}" class="btn btn-danger w-100">Ver Centros</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Cursos -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-lg rounded-4 bg-light hover-card">
                <div class="card-body text-center">
                    <i class="bi bi-journal-code display-4 text-warning mb-3"></i>
                    <h5 class="card-title fw-bold">Cursos</h5>
                    <p class="card-text">Revisa todos los cursos registrados y sus detalles.</p>
                    <a href="{{ route('course.index') }}" class="btn btn-warning w-100">Ver Cursos</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Aprendices -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-lg rounded-4 bg-light hover-card">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill display-4 text-info mb-3"></i>
                    <h5 class="card-title fw-bold">Aprendices</h5>
                    <p class="card-text">Explora el listado de aprendices con su curso y computador asignado.</p>
                    <a href="{{ route('apprentice.index') }}" class="btn btn-info w-100 text-white">Ver Aprendices</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Computadores -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-lg rounded-4 bg-light hover-card">
                <div class="card-body text-center">
                    <i class="bi bi-pc-display-horizontal display-4 text-dark mb-3"></i>
                    <h5 class="card-title fw-bold">Computadores</h5>
                    <p class="card-text">Visualiza el inventario de computadores y su aprendiz asignado.</p>
                    <a href="{{ route('computer.index') }}" class="btn btn-dark w-100">Ver Computadores</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
