@extends('layouts.app')

@section('title', 'Aprendices - ADMIN SENA')

@section('content')

<div class="container mt-4">
    <h4 class="mb-4">Crear un nuevo aprendiz</h4>
    <form action="{{route('apprentice.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del aprendiz" required>
            <input type="text" class="form-control mt-3" name="email" id="email" placeholder="Ingrese el email del aprendiz" required>
            <input type="text" class="form-control mt-3" name="cell_number" id="cell_number" placeholder="Ingrese el numero de telefono del aprendiz" required>
        </div>

        <div class="mb-3">
            <select name="course_id" id="course_id" class="form-select" required>
                <option value="">Seleccione un curso</option>
                @foreach($courses as $course)
                <option value="{{$course->id}}">{{$course->course_number}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <select name="computer_id" id="computer_id" class="form-select" required>
                <option value="">Seleccione un computador</option>
                @foreach($computers as $computer)
                <option value="{{$computer->id}}">{{$computer->number}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-dark">Guardar</button>
        <a href="{{route('apprentice.index')}}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection