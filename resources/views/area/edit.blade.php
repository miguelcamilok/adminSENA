@extends('layouts.app')

@section('title', 'Areas - ADMIN SENA')

@section('content')
    <div class="container mt-5">
        <h4 class="mb-4">Actualizar Area #{{ $area->id }}</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('area.update', $area->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $area->name) }}">
                    </div>

                    <button type="submit" class="btn btn-dark">
                        <i class="bi bi-save"></i> Actualizar Area
                    </button>
                    <a href="{{ route('area.index') }}" class="btn btn-secondary" >Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection