@extends('layouts.app')

@section('title', 'Teachers - ADMIN SENA')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Listado de Profesores</h4>
    <a href="{{route('teacher.create')}}" class="btn btn-dark">+</a>
</div>

<div class="row">
    @foreach ($teachers as $teacher)
    <section class="col-md-4 mb-4">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr><th colspan="2">Profesor #{{$teacher->id}}</th></tr>
            </thead>
            <tbody>
                <tr><th>Nombre</th><td>{{ $teacher->name}}</td></tr>
                <tr><th>Gmail</th><td> {{ $teacher->email}}</td></tr>
                <tr><th>Area</th><td>{{ $teacher->area->name}}</td></tr>
                <tr><th>Centro de Formacion</th><td>{{ $teacher->trainingCenter->name}}</td></tr>
            </tbody>
        </table>
    </section>
    @endforeach
@endsection