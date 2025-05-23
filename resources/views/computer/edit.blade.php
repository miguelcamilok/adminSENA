@extends('layouts.app')

@section('title', 'Computadores - ADMIN SENA')

@section('content')
    <div class="container mt-5">
        <h4 class="mb-4">Actualizar Computador</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <input type="text" class="form-control" id="number" name="number" value="{{ old('number', $computer->number) }}">
                        <input type="text" class="form-control mt-3" id="brand" name="brand" value="{{ old('brand', $computer->brand) }}">


                    </div>

                    <button type="submit" class="btn btn-dark">
                        <i class="bi bi-save"></i> Actualizar Computador
                    </button>
                    <a href="{{ route('computer.index') }}" class="btn btn-secondary" >Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection