@extends('layouts.app')

@section('title', 'Edit Computer - ADMIN SENA')

@section('content')
    <div class="container mb-3">
        <h4 class="mb-3 fw-bold text-primary-emphasis">
            Actualizar Computador <span class="text-dark">#{{ $computer->id }}</span>
        </h4>

        <div class="card shadow-sm rounded-4 border border-2 border-light-subtle">
            <div class="card-body">
                <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <input type="text" class="form-control" id="number" name="number" value="{{ old('number', $computer->number) }}">
                        <input type="text" class="form-control mt-3" id="brand" name="brand" value="{{ old('brand', $computer->brand) }}">


                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Actualizar Computador
                    </button>
                    <a href="{{ route('computer.index') }}" class="btn btn-secondary" >Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection