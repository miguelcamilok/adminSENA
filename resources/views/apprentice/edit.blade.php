@extends('layouts.app')

@section('title', 'Aprendices - ADMIN SENA')

@section('content')
    <div class="container mt-5">
        <h4 class="mb-4">Actualizar Aprendiz #{{ $apprentice->id }}</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $apprentice->name) }}">
                        <input type="text" class="form-control mt-3" id="email" name="email" value="{{ old('email', $apprentice->email) }}">
                        <input type="text" class="form-control mt-3" id="cell_number" name="cell_number" value="{{ old('cell_number', $apprentice->cell_number) }}">
                    </div>

                    <button type="submit" class="btn btn-dark">
                        <i class="bi bi-save"></i> Actualizar Aprendiz
                    </button>
                    <a href="{{ route('apprentice.index') }}" class="btn btn-secondary" >Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection