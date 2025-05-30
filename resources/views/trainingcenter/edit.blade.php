@extends('layouts.app')

@section('title', 'Edit Training Center - ADMIN SENA')

@section('content')
    <div class="container mb-3">
        <h4 class="mb-3 fw-bold text-primary-emphasis">
            Actualizar Centro de Formacion <span class="text-dark">#{{ $trainingcenter->id }}</span>
        </h4>

        <div class="card shadow-sm rounded-4 shadow-sm border border-2 border-light-subtle">
            <div class="card-body">
                <form action="{{ route('trainingcenter.update', $trainingcenter->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $trainingcenter->name) }}">
                        <input type="text" class="form-control mt-3" id="location" name="location" value="{{ old('location', $trainingcenter->location) }}">
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Actualizar Centro de Formacion
                    </button>
                    <a href="{{ route('trainingcenter.index') }}" class="btn btn-secondary" >Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection