@extends('layouts.app')

@section('title', 'Profesores - ADMIN SENA')

@section('content')
<div class="container mt-5">
    <h4 class="mb-4">Actualizar Profesor #{{$teacher->id}}</h4>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{route('teacher.update', $teacher->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name', $teacher->name)}}">
                    <input type="text" class="form-control mt-3" name="email" id="email" value="{{old('email', $teacher->email)}}">
                </div>

                <button type="submit" class="btn btn-dark">
                    <i class="bi bi-save"></i>Actualizar Profesor
                </button>
                <a href="{{route('teacher.index')}}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection