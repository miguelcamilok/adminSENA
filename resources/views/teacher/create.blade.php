@extends('layouts.app')

@section('title', 'Create Teacher - ADMIN SENA')

@section('content')
    <div class="container mt-4">
        <h4 class="mb-4">Crear un nuevo profesor</h4>

        <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre"
                    required>
                <input type="text" class="form-control mt-3" name="email" id="email" placeholder="Ingrese el email"
                    required>
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
                    <option value="">Seleccione un centro de formacion</option>
                    @foreach ($trainingcenters as $trainingcenter)
                        <option value="{{ $trainingcenter->id }}">{{ $trainingcenter->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
