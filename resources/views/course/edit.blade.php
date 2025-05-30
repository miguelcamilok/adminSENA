@extends('layouts.app')

@section('title', 'Edit Course - ADMIN SENA')

@section('content')
<div class="container mb-3">
    <h4 class="mb-3 fw-bold text-primary-emphasis">
            Actualizar Curso <span class="text-dark">#{{ $course->id }}</span>
        </h4>

    <div class="card shadow-sm rounded-4 shadow-sm border border-2 border-light-subtle">
        <div class="card-body">
            <form action="{{route('course.update', $course->id)}}" method="POST">
                @csrf
                @method('put')

                <div class="mb-3">
                    <input type="text" class="form-control" name="course_number" id="course_number" value="{{old('course_number', $course->course_number)}}">
                    <input type="text" class="form-control mt-3" name="day" id="day" value="{{old('day', $course->day)}}">
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i>Actualizar Curso
                </button>
                <a href="{{route('course.index')}}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>

</div>
    
@endsection