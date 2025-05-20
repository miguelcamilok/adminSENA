@extends('layouts.app')

@section('title', 'Inicio - ADMIN SENA')

@section('content')
<div class="row">
  <div class="col-md-4 mb-4">
    <div class="card h-100 shadow rounded-4 border-0">
      <div class="card-body">
        <h5 class="card-title">Areas</h5>
        <p class="card-text">Ver listado completo de Areas con sus profesores y cursos asignados.</p>
        <a href="{{ route('area.index') }}" class="btn btn-dark w-100">Ver Areas</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="card h-100 shadow rounded-4 border-0">
      <div class="card-body">
        <h5 class="card-title">Profesores</h5>
        <p class="card-text">Consulta los profesores registrados y sus asignaciones.</p>
        <a href="{{ route('teacher.index') }}" class="btn btn-dark w-100">Ver Profesores</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="card h-100 shadow rounded-4 border-0">
      <div class="card-body">
        <h5 class="card-title">Centros de Formación</h5>
        <p class="card-text">Consulta los centros de formación y sus cursos/profesores asociados.</p>
        <a href="{{ route('trainingcenter.index') }}" class="btn btn-dark w-100">Ver Centros</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="card h-100 shadow rounded-4 border-0">
      <div class="card-body">
        <h5 class="card-title">Cursos</h5>
        <p class="card-text">Revisa todos los cursos registrados con sus respectivos datos.</p>
        <a href="{{ route('course.index') }}" class="btn btn-dark w-100">Ver Cursos</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="card h-100 shadow rounded-4 border-0">
      <div class="card-body">
        <h5 class="card-title">Aprendices</h5>
        <p class="card-text">Explora el listado de aprendices junto a su curso y computador asignado.</p>
        <a href="{{ route('apprentice.index') }}" class="btn btn-dark w-100">Ver Aprendices</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="card h-100 shadow rounded-4 border-0">
      <div class="card-body">
        <h5 class="card-title">Computadores</h5>
        <p class="card-text">Visualiza el inventario de computadores y su aprendiz asignado.</p>
        <a href="{{ route('computer.index') }}" class="btn btn-dark w-100">Ver Computadores</a>
      </div>
    </div>
  </div>
</div>
@endsection
