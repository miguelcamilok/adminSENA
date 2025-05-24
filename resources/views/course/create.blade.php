@extends('layouts.app')

@section('title', 'Cursos - ADMIN SENA')

@section('content')
    <div class="container mt-4">
        <h4>Crear un nuevo curso</h4>

        <form action="{{ route('course.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" id="course_number" name="course_number"
                    placeholder="Ingrese el numero de ficha" required>
                <input type="text" class="form-control mt-3" id="day" name="day"
                    placeholder="Ingrese la jornada de formacion" required>
            </div>

            <div class="mb-3">
                <select name="area_id" class="form-select" id="area_id" required>
                    <option value="">Seleccione un area</option>
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <select name="training_center_id" class="form-select" id="training_center_id" required>
                    <option value="">Seleccion un centro de formacion</option>
                    @foreach ($trainingcenters as $trainingcenter)
                        <option value="{{ $trainingcenter->id }}">{{ $trainingcenter->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-dark">Guardar</button>
            <a href="{{ route('course.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>

    </div>

@endsection
