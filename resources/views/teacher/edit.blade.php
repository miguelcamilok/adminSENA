@extends('layouts.app')

@section('title', 'Edit Teacher - ADMIN SENA')

@section('content')
<div class="container mb-3">
    <h4 class="mb-3 fw-bold text-primary-emphasis">
            Actualizar Profesor <span class="text-dark">#{{ $teacher->id }}</span>
        </h4>

    <div class="card shadow-sm rounded-4 shadow-sm border border-2 border-light-subtle">
        <div class="card-body">
            <form action="{{route('teacher.update', $teacher->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name', $teacher->name)}}">
                    <input type="text" class="form-control mt-3" name="email" id="email" value="{{old('email', $teacher->email)}}">
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i>Actualizar Profesor
                </button>
                <a href="{{route('teacher.index')}}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection