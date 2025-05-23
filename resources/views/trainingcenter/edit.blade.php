@extends('layouts.app')

@section('title', 'Centros de Formacion - ADMIN SENA')

@section('content')
    <div class="container mt-5">
        <h4 class="mb-4">Actualizar Centro de Formacion #{{ $trainingcenter->id }}</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('trainingcenter.update', $trainingcenter->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $trainingcenter->name) }}">
                        <input type="text" class="form-control mt-3" id="location" name="location" value="{{ old('location', $trainingcenter->location) }}">
                    </div>

                    <button type="submit" class="btn btn-dark">
                        <i class="bi bi-save"></i> Actualizar Centro de Formacion
                    </button>
                    <a href="{{ route('trainingcenter.index') }}" class="btn btn-secondary" >Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection