@extends('layouts.app')

@section('title', 'Aprendices - ADMIN SENA')

@section('content')

    <div class="container my-5">

        <h4 class="mb-2">Detalles del Aprendiz #{{ $apprentice->id }}</h4>

        <table class="table table-bodered table-hover">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Gmail</th>
                    <th>Numero de Telefono</th>
                    <th>Curso Asignado</th>
                    <th>Computador Asignado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$apprentice->id}}</td>
                    <td>{{$apprentice->name}}</td>
                    <td>{{$apprentice->email}}</td>
                    <td>{{$apprentice->cell_number}}</td>
                    <td>{{$apprentice->course->course_number}}</td>
                    <td>{{$apprentice->computer->number}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
