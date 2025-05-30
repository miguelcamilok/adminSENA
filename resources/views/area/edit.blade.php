@extends('layouts.app')

@section('title', 'Edit Areas - ADMIN SENA')

@section('content')
    <div class="container mb-3">
        <h4 class="mb-3 fw-bold text-primary-emphasis">
            Actualizar Area <span class="text-dark">#{{ $area->id }}</span>
        </h4>

        <div class="card shadow-sm rounded-4 border border-2 border-light-subtle">
            <div class="card-body">
                <form action="{{ route('area.update', $area->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $area->name) }}">
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Actualizar Area
                    </button>
                    <a href="{{ route('area.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
