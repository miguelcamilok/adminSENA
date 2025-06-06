@extends('layouts.app')

@section('title', 'Create Training Center - ADMIN SENA')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Crear un nuevo centro de formacion</h4>

    <form action="{{ route('trainingcenter.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del centro de formacion" required>
            <input type="text" class="form-control mt-3" id="location" name="location" placeholder="Ingrese la ubicacion">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{route('trainingcenter.index')}}" class="btn btn-secondary">Cancelar</a> 
    </form>
</div>

@endsection