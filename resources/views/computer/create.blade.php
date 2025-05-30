@extends('layouts.app')

@section('title', 'Create Computer - ADMIN SENA')

@section('content')
<div class="container mt-4">
    <h4 class="mb-2">Crear un nuevo computador</h4>

    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" id="number" class="form-control" name="number" placeholder="Ingrese el numero del computador" required>
            <input type="text" name="brand" class="form-control mt-3" id="brand" placeholder="Ingrese la marca del computador" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('computer.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection