@extends('layouts.app')

@section('title', 'Cursos - ADMIN SENA')

@section('content')

    <h4 class="mb-2">Listado de Cursos</h4>
    <div class="row">
    @foreach ($courses as $course)    
        <section class="col-md-4 mb-4">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr><th colspan="2">Curso #{{ $course->id }}</th></tr>
                </thead>
                <tbody>
                    <tr><th>Numero de Curso</th><td>{{ $course->course_number }}</td></tr>
                    <tr><th>Horario</th><td>{{ $course->day }}</td></tr>
                    <tr><th>Area</th><td>{{ $course->area->name}}</td></tr>
                    <tr><th>Centro de Formacion</th><td>{{ $course->trainingCenter->name}}</td></tr>
                </tbody>
            </table>
        </section>
    @endforeach
@endsection