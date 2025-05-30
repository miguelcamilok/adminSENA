@extends('layouts.app')

@section('title', 'Edit Apprentice - ADMIN SENA')

@section('content')
    <div class="container mb-3">
        <h4 class="mb-3 fw-bold text-primary-emphasis">
            Actualizar Aprendiz <span class="text-dark">#{{ $apprentice->id }}</span>
        </h4>

        <div class="card shadow-sm rounded-4 border border-2 border-light-subtle">
            <div class="card-body">
                <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $apprentice->name) }}">
                        <input type="text" class="form-control mt-3" id="email" name="email" value="{{ old('email', $apprentice->email) }}">
                        <input type="text" class="form-control mt-3" id="cell_number" name="cell_number" value="{{ old('cell_number', $apprentice->cell_number) }}">
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Actualizar Aprendiz
                    </button>
                    <a href="{{ route('apprentice.index') }}" class="btn btn-secondary" >Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection