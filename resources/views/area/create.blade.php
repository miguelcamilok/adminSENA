@extends('layouts.app')

@section('title', 'Crear Area - ADMIN SENA')

@section('content')
    <div class="container mt-4">
        <h4 class="mb-4">Crear Nueva Area</h4>

    <form action="{{ route('area.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del área" required>
        </div>

        <button type="submit" class="btn btn-dark">Guardar</button>
        <a href="{{ route('area.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
