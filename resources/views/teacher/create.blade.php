@extends('layouts.app')

@section('title', 'Create Profesor - ADMIN SENA')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Crear un Nuevo Profesor</h4>

    <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre">
            <input type="text" class="form-control mt-3" name="email" id="email" placeholder="Ingrese el email">
        </div>

        <button type="submit" class="btn btn-dark">Guardar</button>
        <a href="{{route('teacher.index')}}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection